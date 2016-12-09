<?php

namespace App\Http\Controllers;

use App\Review;
use Request;
use App\Getgoods;
use App\User;
use Auth;
use Session;

class ReviewController extends Controller
{

    // レビューページ作成
    public function viewReview($name){

        return view('review',compact('name'));

    }

    // 入力された商品名を元に似た名前の商品があるかを検索し連想配列で返す
    public function getData()
    {

        Session::put('goods_name', Request::get('Search'));

        //$list = Getgoods::where('name', 'LIKE', "%{$name}%")->paginate(1);
        return redirect('/search-result/');
    }

    public function viewData(){

        $name = Session::get('goods_name');

        $list = Getgoods::where('name', 'LIKE', "%".$name."%")->paginate(10);

        return view('search-result', compact('list'));

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
            $user_id = User::where('sex', $sex)->where('age', $age)->where('hobbies_id', $hobbies)->get(['id']);
        }else{
            // ログインユーザーID取得し、connectをtrueに
            $user_id = Auth::user()->id;
            User::where('id', $user_id)->update(['connect'=>true]);

        }


        // 名前・コメント・評価点数・商品タイプ取得
        $syohin = Request::get('name');
        $comment = Request::get('comment');
        $rate = Request::get('rate');
        $goods_type = (int)Request::input('wantgood');
        $scene = Request::get('scene');
        // 商品id変数
        $getgoods_id = -1;

        //商品名からidを取得
        $getgoods_id = Getgoods::where('name', $syohin)->get('id');

        $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => $scene,
            'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => (int)$rate);
        Review::create($review);

        if(Auth::guest()) {
            Session::put('connect', true);
        }

        // ランキングページ表示
        return redirect('/scene/');
    }

}
