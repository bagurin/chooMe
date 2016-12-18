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

class UploadController extends Controller
{
    // 商品をデータベースに格納しレビューをする
    public function postIndex(\Illuminate\Http\Request $request)
    {

//-----------------------------------バリデート-------------------------------------------

//        $rules = [
//            'name' => 'required',
//            'image' => 'required',
//            'comment' => 'required',
//        ];
//
//        $messages = [
//            'name.required' => '商品名を入力してください',
//            'image.required' => '画像を添付してください',
//            'comment.repuired' => 'レビューを入力してください'
//        ];
//
//        $this->validate($request, $rules, $messages);

//-----------------------------------バリデート-------------------------------------------

//--------------------------------------商品登録--------------------------------------------

        // 商品名取得
        $syohin = Request::get('productname');

        // ジャンル番号を取得
        $genres = (int)Request::get('genreid');

        // アップロード画像を取得
        $image = Request::get('image');

//        //ファイル名を生成し画像をアップロード
//        $name = md5(sha1(uniqid(mt_rand(), true))) . '.' . $image->getClientOriginalExtension();
//        $image->move('media', $name);
//
//        // 画像保存先pathとファイル名を連結
//        $path = '/media/' . $name;
        $path = '/media/' . $image;

        //url生成
        $url = 'https://www.amazon.co.jp/gp/search/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%
               82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=' . $syohin;

        // 配列にまとめてデータベースに追加
        $getgoods = array('name' => $syohin, 'genres_id' => (int)$genres, 'image' => $path, 'url' => $url);
        Getgoods::create($getgoods);
        //return redirect('/');

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
        // 商品id変数
        $getgoods_id = -1;

        // テーブル全件取得
        $getgoods_table = Getgoods::all();

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

    public function nameCheck(){

        // 商品名取得
        $syohin = Request::input('name');

        // テーブル全件取得
        $getgoods_table = Getgoods::all();

        foreach ($getgoods_table as $getgoods) {
            // 同じ商品があったら
            if ($syohin == $getgoods['name']) {
                return Response::make("NG", 500);
            }
        }
        return Response::make("OK", 200);
    }

    public function imageTemp(){

        $image = Request::file('image');

        //ファイル名を生成し画像をアップロード
        $name = md5(sha1(uniqid(mt_rand(), true))) . '.' . $image->getClientOriginalExtension();
        $image->move('temp', $name);

        return Response::make('/temp/'.$name, 200);

    }

}
