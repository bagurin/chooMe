<?php

namespace App\Http\Controllers;

use App\Getgoods;
use App\Pattern;
use App\Rank;
use App\Http\Controllers\CipherController as Cipher;
use App\Review;
use Request;
use App\Http\Controllers\PatternController as Patternc;


class ApiController extends Controller
{

    //api予測検索
    public function preSerch(){

        $cipher = new Cipher();
        $osid = 1;

        // キー
        if(!isset($_GET['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_GET['key'];

        if($cipher->keycheck($key,$osid)){

            // 商品ID
            if(!isset($_GET['word'])){
                $error = 'キーワードがありません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $word = $_GET['word'];

            $return_array = Getgoods::where('name', 'LIKE', "%".$word."%")->get(['name'])->toArray();

            return json_encode($return_array, 256);

        }

        $error = 'キーが正しくありません。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);

    }

    //api商品検索結果
    public function serchResult(){

        $cipher = new Cipher();
        $osid = 1;

        // キー
        if(!isset($_GET['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_GET['key'];

        if($cipher->keycheck($key,$osid)){

            // 商品ID
            if(!isset($_POST['word'])){
                $error = 'キーワードがありません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $word = $_POST['word'];

            $result = Getgoods::where('name', 'LIKE', "%".$word."%")->get(['id','name','image'])->toArray();

            $return_array = array("Type"=>"SerchResult");
            $items_array = array();


            foreach ($result as $val) {
                $image = Request::root() . $val['image'];
                $val['image'] = $image;
                $item_array = array("Item"=>$val);
                $items_array = array_merge($items_array,array($item_array));
            }

            $return_array = array_merge($return_array,array("Items"=>$items_array));

            return json_encode($return_array, 256);

        }

        $error = 'キーが正しくありません。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);

    }

    //api商品データ
    public function goodsData(){

        $cipher = new Cipher();
        $osid = 1;

        // キー
        if(!isset($_GET['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_GET['key'];

        if($cipher->keycheck($key,$osid)){

            // 商品ID
            if(!isset($_POST['goodsid'])){
                $error = '商品IDがありません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $goods_id = (int)$_POST['goodsid'];

            $goods_data = Getgoods::join_genres()->select_goods()->where_goods($goods_id)->get()->toArray();

            //imageを型変換
            $url = Request::root() . $goods_data[0]['image'];
            $goods_data[0]['image'] = $url;

            $return_array = $goods_data[0];

            $reviews = Review::join_goodstyepes()->leftjoin_scene()->select_review()
                ->where_goods($goods_id)->orderby_goodstype()->orderby_rate()->get()->toArray();

            $items_array = array();

            foreach ($reviews as $val) {
                $item_array = array("Review"=>$val);
                $items_array = array_merge($items_array,array($item_array));
            }

            $return_array = array_merge($return_array,array("Items"=>$items_array));

            return json_encode($return_array, 256);

        }

        $error = 'キーが正しくありません。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);

    }

    //api商品登録
    public function goodsEntry(){

        $cipher = new Cipher();
        $osid = 1;

        // キー
        if(!isset($_POST['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_POST['key'];

        if($cipher->keycheck($key,$osid)){

            // トークン
            if(!isset($_POST['token'])){
                $error = 'トークンがありません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $token = $_POST['token'];

            // トークンが一致するユーザーid取得
            $user_id = $this->token_getid($token);
            if($user_id == false){
                $error = 'ユーザーが存在しません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }

            // 商品名
            if(!isset($_POST['name'])){
                $error = '商品名が入力されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $goods_name = $_POST['name'];

            // 画像
            if(!isset($_POST['image'])){
                $error = '画像が選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $image = $_POST['image'];

            // ジャンル
            if(!isset($_POST['genres'])){
                $error = 'ジャンルが入力されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $genres = (int)$_POST['genres'];

            // レビュー
            if(!isset($_POST['comment'])){
                $error = 'コメントが入力されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $comment = $_POST['comment'];

            // 評価
            if(!isset($_POST['rate'])){
                $error = 'レートが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $rate = (int)$_POST['rate'];

            // 商品タイプ
            if(!isset($_POST['goodstype'])){
                $error = '商品タイプが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $goods_type = (int)$_POST['goodstype'];

            // シーン
            if(!isset($_POST['scenes'])){
                $error = 'シーンが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $scenes = (int)$_POST['scenes'];

//--------------------------------------------商品登録------------------------------------------------------
            //url生成
            $url = 'https://www.amazon.co.jp/gp/search/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%
               82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=' . $goods_name;

            // 配列にまとめてデータベースに追加
            $getgoods = array('name' => $goods_name, 'genres_id' => (int)$genres,
                //'image' => $path,
                'url' => $url);
            Getgoods::create($getgoods);

//--------------------------------------------レビュー------------------------------------------------------
            $getgoods_id = Getgoods::where('name', $goods_name)->get(['id']);
            $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => $scenes,
                'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => (int)$rate);
            Review::create($review);

            $message = '商品及びレビューを登録しました。';
            return json_encode($message, JSON_UNESCAPED_UNICODE);

        }

        $error = 'キーが正しくありません。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);

    }

    // apiレビュー
    public function apiReview(){

        $cipher = new Cipher();
        $osid = 1;

        // キー
        if(!isset($_POST['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_POST['key'];

        if($cipher->keycheck($key,$osid)) {

            // トークン
            if (!isset($_POST['token'])) {
                $error = 'トークンがありません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $token = $_POST['token'];

            // トークンが一致するユーザーid取得
            $user_id = $cipher->token_getid($token);
            if ($user_id == false) {
                $error = 'ユーザーが存在しません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }

            // 商品ID
            if(!isset($_POST['goodsid'])){
                $error = '商品IDが送られていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $getgoods_id = (int)$_POST['goodsid'];

            // レビュー
            if(!isset($_POST['comment'])){
                $error = 'コメントが入力されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $comment = $_POST['comment'];

            // 評価
            if(!isset($_POST['rate'])){
                $error = 'レートが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $rate = (int)$_POST['rate'];

            // 商品タイプ
            if(!isset($_POST['goodstype'])){
                $error = '商品タイプが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $goods_type = (int)$_POST['goodstype'];

            // シーン
            if(!isset($_POST['scenes'])){
                $error = 'シーンが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $scenes = (int)$_POST['scenes'];

            $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => $scenes,
                'goodstypes_id' => $goods_type, 'comment' => $comment, 'rate' => (int)$rate);
            Review::create($review);

            $message = 'レビューを登録しました。';
            return json_encode($message, JSON_UNESCAPED_UNICODE);
        }
        $error = 'キーが正しくありません。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);
    }

    // apiランキング用
    public function apiRanking(){

        $patternc = new Patternc();
        $cipher = new Cipher();
        $osid = 1;

        // goodstype
        if(!isset($_GET['goodstype'])){
            $error = 'goodsTypeがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $goodstype = $_GET['goodstype'];

        // キー
        if(!isset($_GET['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_GET['key'];

        if(!isset($_GET['age'])){
            $error = 'ageがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $age = $_GET['age'];

        if(!isset($_GET['sex'])){
            $error = 'sexがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $sex = $_GET['sex'];

        if(!isset($_GET['hobbie'])){
            $error = 'hobbieがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $hobbie = $_GET['hobbie'];

        if(!isset($_GET['scene'])){
            $error = 'sceneがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $scene = $_GET['scene'];

        if(!isset($_GET['genre'])){
            $error = 'genreがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $genre = $_GET['genre'];

        $parray = array('age'=>$age,'sex'=>$sex,'hobbie'=>$hobbie,'scene'=>$scene,'genre'=>$genre);

        $pattern = $patternc->patterncheck($parray);
        if($pattern == false){
            return json_encode('パターンが不正です', JSON_UNESCAPED_UNICODE);
        }

        if($cipher->keycheck($key,$osid)){

            $rankgoods = Rank::join_goods()->leftjoin_genres()->select_rank()
            ->where_rank($pattern, $goodstype)->orderBy_rank()->get()->toArray();

            $pattern_name = Pattern::get_name($pattern)->get()->toArray();
            $pname = $pattern_name[0]['name'];


            $return_array = array("Type"=>"Ranking","Pattern"=>$pname);
            $items_array = array();

            foreach ($rankgoods as $val) {
                //imageを型変換
                $url = Request::root() . $val['image'];
                $val['image'] = $url;
                $item_array = array("Item"=>$val);
                $items_array = array_merge($items_array,array($item_array));
            }

            $return_array = array_merge($return_array,array("Items"=>$items_array));

            return json_encode($return_array, 256);

        }

        $error = 'キーが正しくありません。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);

    }

}
