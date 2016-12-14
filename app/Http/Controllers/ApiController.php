<?php

namespace App\Http\Controllers;

use App\Getgoods;
use App\Pattern;
use App\Rank;
use App\Http\Controllers\CipherController as Cipher;
use App\Review;
use Request;


class ApiController extends Controller
{

    // api商品登録
    public function goodsEntry(){

        $cipher = new Cipher();
        $osid = 1;

        // キー
        if(!isset($_POST['key'])){
            $error = 'キーがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $key = $_POST['key'];

        // トークン
        if(!isset($_POST['token'])){
            $error = 'トークンがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $token = $_POST['token'];

        if($cipher->keycheck($key,$osid)){

            // トークンが一致するユーザーid取得
            $user_id = $cipher->token_getid($token);

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
            $genres = $_POST['genres'];

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
            $rate = $_POST['rate'];

            // 商品タイプ
            if(!isset($_POST['goodstype'])){
                $error = '商品タイプが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $goods_type = $_POST['goodstype'];

            // シーン
            if(!isset($_POST['scenes'])){
                $error = 'シーンが選択されていません。';
                return json_encode($error, JSON_UNESCAPED_UNICODE);
            }
            $scenes = $_POST['scenes'];

//--------------------------------------------商品登録------------------------------------------------------
            // 画像をユニークな名前に変更しファイルへ移動
            $name = md5(sha1(uniqid(mt_rand(), true))) . '.' . $image->getClientOriginalExtension();
            $image->move('media', $name);
            // 画像保存先pathとファイル名を連結
            $path = public_path() . 'media/' . $name;

            //url生成
            $url = 'https://www.amazon.co.jp/gp/search/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%
               82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=' . $goods_name;

            // 配列にまとめてデータベースに追加
            $getgoods = array('name' => $goods_name, 'genres_id' => (int)$genres, 'image' => $path, 'url' => $url);
            Getgoods::create($getgoods);

//--------------------------------------------レビュー------------------------------------------------------
            $getgoods_id = Getgoods::where('name', $goods_name)->get(['id']);
            $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => $scenes,
                'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => (int)$rate);
            Review::create($review);

            $message = '商品とレビューを登録しました。';
            return json_encode($message, JSON_UNESCAPED_UNICODE);

        }

        $error = '商品登録に失敗しました。';
        return json_encode($error, JSON_UNESCAPED_UNICODE);

    }

    // apiランキング用
    public function apiRanking(){

        $cipher = new Cipher();
        $osid = 1;

        // ランキングパターンid
        if(!isset($_GET['pattern'])){
            $error = 'patternIdがありません。';
            return json_encode($error, JSON_UNESCAPED_UNICODE);
        }
        $pattern = $_GET['pattern'];

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
