<?php

namespace App\Http\Controllers;

use App\Review;
use Request;
use App\Getgoods;
use App\User;
use Auth;

class ReviewController extends Controller
{

    // 入力された商品名を元に似た名前の商品があるかを検索し連想配列で返す
    public function getDate()
    {
        //$name = Request::get('name');

        $name = 'ak47';

        $list = Getgoods::where('name', 'LIKE', '%'.$name.'%')->paginate(10);
        dd($list);

        return view('search-result')->with('list', $list);
    }

    // レビューをデータベースに格納
    public function review(){

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


        // 商品名・コメント・評価点数取得
        $syohin = Request::get('name');
        $comment = Request::get('comment');
        $rate = Request::get('rate');
        // 商品id変数
        $getgoods_id = -1;


        //商品名からidを取得
        $getgoods_id = Getgoods::where('name', $syohin)->get('id');

        $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id,
                            'scenes_id' => 1, 'comment' => $comment, 'rate' => (int)$rate);
        Review::create($review);

        // ランキングページにする際ゲストなら表示できるようにする
        return redirect('/');
    }

}
