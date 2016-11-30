<?php

namespace App\Http\Controllers;

use App\Review;
use App\User;
use Validator;
use Request;
use Auth;
use App\Getgoods;

class UploadController extends ReviewController
{
    // 商品をデータベースに格納しレビューをする
    public function postIndex(\Illuminate\Http\Request $request)
    {

//-----------------------------------バリデート-------------------------------------------

        $rules = [
            'name' => 'required',
            'image' => 'required',
            'comment' => 'required',
        ];

        $messages = [
            'name.required' => '商品名を入力してください',
            'image.required' => '画像を添付してください',
            'comment.repuired' => 'レビューを入力してください'
        ];

        $this->validate($request, $rules, $messages);

//-----------------------------------バリデート-------------------------------------------

//--------------------------------------商品登録--------------------------------------------

        // 商品名取得
        $syohin = Request::input('name');

        // テーブル全件取得
        $getgoods_table = Getgoods::all();

        foreach ($getgoods_table as $getgoods) {
            // 同じ商品があったら商品データを渡し、レビュー
            if ($syohin == $getgoods['name']) {
                return redirect('/review/'.$syohin);
            }
        }

        // ジャンル番号を取得
        $genres = (int)Request::input('genres');

        // アップロード画像を取得
        $image = Request::file('image');

        // ファイル名を生成し画像をアップロード
        $name = md5(sha1(uniqid(mt_rand(), true))) . '.' . $image->getClientOriginalExtension();
        $image->move('media', $name);

        // 画像保存先pathとファイル名を連結
        $path = public_path() . 'media/' . $name;

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

        //ログインしているかで取得するidを変更
        if(Auth::guest()) {
            //ゲストユーザーid取得用データ取得
            $sex = Request::get('sex');
            $age = Request::get('age');
            $hobbies = Request::get('hobbies_id');
            //ゲストユーザーid取得
            $user_id = User::where('sex', $sex)->where('age', $age)->where('hobbies_id', $hobbies)-get('id');
        }else{
            // ログインユーザーID取得し、connectをtrueに
            $user_id = Auth::user()->id;
            User::where('id', $user_id)->update(['connect'=>true]);

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
        foreach ($getgoods_table as $getgoods) {
            if($syohin == $getgoods['name']){
                $getgoods_id = $getgoods['id'];
                break;
            }
        }

        // 商品タイプ取得
        $goods_type = (int)Request::input('wantgood');

        $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => $scene,
                           'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => (int)$rate);
        Review::create($review);

//--------------------------------------レビュー--------------------------------------------



        if(Auth::guest()) {
            Session::put('connect', true);
            return redirect('/scene/');
        }
        return redirect('/scene/');
    }

}
