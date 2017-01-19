<?php

namespace App\Http\Controllers;

use App\Review;
use Validator;
use Request;
use Auth;
use Session;
use Response;
use App\Getgoods;
use App\UserInfo;
use File;

class UploadController extends Controller
{
    // 商品をデータベースに格納しレビューをする
    public function postIndex()
    {

//--------------------------------------商品登録--------------------------------------------

        // 商品名取得
        $syohin = Request::get('productname');

        // ジャンル番号を取得
        $genres = (int)Request::get('genreid');

        // tmpフォルダ内の画像パス
        $image = Session::get('path');
        // 移動ファイル名
        $name = basename($image);

        //ファイル移動
        if (!File::move($image ,'./media/'.$name)) {
            return Response::make('NG', 500);
        }

        $path = '/media/' . $name;

        //url生成
        $url = 'https://www.amazon.co.jp/gp/search/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%
               82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=' . $syohin;

        Session::pull('path');

        // 配列にまとめてデータベースに追加
        $getgoods = array('name' => $syohin, 'genres_id' => (int)$genres, 'image' => $path, 'url' => $url);
        Getgoods::create($getgoods);

//--------------------------------------商品登録--------------------------------------------


//--------------------------------------レビュー--------------------------------------------

        //id用変数
        $user_id = -1;

        if(Auth::check()) {
            // ログインユーザーID取得し、connectをtrueに
            $user_id = Auth::user()->id;
            UserInfo::where('id', $user_id)->update(['connect'=>true]);
        }else{
            //ゲストユーザーid取得用データ取得
            $sex = Request::get('sex');
            $age = (int)Request::get('age');
            $hobbies = (int)Request::get('hobbies_id');
            //ゲストユーザーid取得
            $id = UserInfo::where('sex', $sex)->where('age', $age)->where('hobbies_id', $hobbies)->get(['id'])->toArray();
            $user_id = $id[0]['id'];
        }

        //コメント・評価点数・シーン取得
        $comment = Request::get('comment');
        $rate = Request::get('rate');
        $scene = Request::get('scene');

        //商品名からidを取得
        $getgoods_id = Getgoods::where('name', $syohin)->get(['id'])->toArray();

        // 商品タイプ取得
        $goods_type = (int)Request::input('wantgood');

        $review = array('getgoods_id' => $getgoods_id[0]['id'], 'users_id' => $user_id, 'scenes_id' => $scene,
            'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => (int)$rate);
        Review::create($review);

//--------------------------------------レビュー--------------------------------------------

        return Response::make("OK", 200);

    }

    public function postGoods()
    {


//--------------------------------------商品登録--------------------------------------------

        // 商品名取得
        $syohin = Request::get('productname');

        // ジャンル番号を取得
        $genres = (int)Request::get('genreid');

        // tmpフォルダ内の画像パス
        $image = Session::get('path');
        // 移動ファイル名
        $name = basename($image);

        //ファイル移動
        if (!File::move($image ,'./media/'.$name)) {
            return Response::make('NG', 500);
        }

        $path = '/media/' . $name;

        //url生成
        $url = 'https://www.amazon.co.jp/gp/search/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%
               82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=' . $syohin;

        Session::pull('path');

        // 配列にまとめてデータベースに追加
        $getgoods = array('name' => $syohin, 'genres_id' => (int)$genres, 'image' => $path, 'url' => $url);
        Getgoods::create($getgoods);

//--------------------------------------商品登録--------------------------------------------


//--------------------------------------レビュー--------------------------------------------

        // レビューをデータベースに格納

        //id用変数
        $user_id = -1;

        if(Auth::check()) {
            // ログインユーザーID取得し、connectをtrueに
            $user_id = Auth::user()->id;
            UserInfo::where('id', $user_id)->update(['connect'=>true]);
        }else{
            //ゲストユーザーid取得用データ取得
            $sex = Request::get('sex');
            $age = (int)Request::get('age');
            $hobbies = (int)Request::get('hobbies_id');
            //ゲストユーザーid取得
            $id = UserInfo::where('sex', $sex)->where('age', $age)->where('hobbies_id', $hobbies)->get(['id'])->toArray();
            $user_id = $id[0]['id'];
        }

        //コメント・評価点数・シーン取得
        $comment = Request::get('comment');
        $rate = Request::get('rate');
        $scene = Request::get('scene');

        //商品名からidを取得
        $getgoods_id = Getgoods::where('name', $syohin)->get(['id'])->toArray();

        // 商品タイプ取得
        $goods_type = (int)Request::input('wantgood');

        $review = array('getgoods_id' => $getgoods_id[0]['id'], 'users_id' => $user_id, 'scenes_id' => $scene,
            'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => (int)$rate);
        Review::create($review);

//--------------------------------------レビュー--------------------------------------------

        return redirect('/single/?goods=' . $getgoods_id[0]['id']);

    }

    public function nameCheck(){

        // 商品名取得
        $syohin = Request::input('name');

        // テーブル全件取得
        $getgoods_table = Getgoods::all();

        foreach ($getgoods_table as $getgoods) {
            // 同じ商品があったら
            if ($syohin == $getgoods['name']) {
                return Response::make($syohin, 500);
            }
        }

        return Response::make($syohin, 200);
    }

    public function imageTemp(){

        if(isset($_POST)){
            $f = $_FILES['image'];
            if(isset($f) and $f['name']){

                //tmpフォルダがない場合作成
                if(!File::exists(public_path().'/tmp/'))
                {
                    File::makeDirectory(public_path().'/tmp/');
                }

                $file = public_path().'/tmp/' . md5(sha1(uniqid(mt_rand(), true))) . $ext = substr($f['name'], strrpos($f['name'], '.'));;
                if(move_uploaded_file($f['tmp_name'],$file)){
                    Session::put('path', $file);
                }
            }
        }

    }

    public function imageDel(){

        // tmpフォルダ内の画像パス
        $image = Session::get('path');

        File::delete($image);

    }

}
