<?php

namespace App\Http\Controllers;

use App\Genres;
use App\Review;
use Request;
use App\Getgoods;
use App\User;
use App\UserInfo;
use Auth;
use Session;
use Response;

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

    // 入力された商品名を元に似た名前の商品があるかを検索し連想配列で返す
    public function searchWord()
    {
        if(isset($_GET['word'])) {

            Session::put('goods_name', $_GET['word']);

            return redirect('/search-result/');
        }
    }

    public function viewData(){

        $name = Session::get('goods_name');

        $list = Getgoods::where('name', 'LIKE', "%".$name."%")->paginate(10);

        //ジャンルidをジャンル名に置き換え
        foreach ($list as $item) {
            $genres = Genres::where('id', $item['genres_id'])->get(['name'])->toArray();
            $item['genres_id'] = $genres[0]['name'];
        }
        return view('search-result', compact('list'));

    }

    // レビューをデータベースに格納
    public function reviewRank(){

        //id用変数
        $user_id = -1;

        //ログインしているかで取得するidを変更
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

        // 名前・コメント・評価点数・商品タイプ取得
        $getgoods_id = Request::get('goodsid');
        $comment = Request::get('comment');
        $rate = Request::get('select');
        $goods_type = (int)Request::input('wantgood');
        $scene = Request::get('scene');

        $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => $scene,
            'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => $rate);
        Review::create($review);

        //登録成功
        return Response::make($rate, 200);

    }

    // レビューをデータベースに格納
    public function review(){

        //id用変数
        $user_id = -1;

        //ログインしているかで取得するidを変更
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

        // 名前・コメント・評価点数・商品タイプ取得
        $getgoods_id = Request::get('goodsid');
        $comment = Request::get('comment');
        $rate = Request::get('rate');
        $goods_type = (int)Request::input('wantgood');
        $scene = Request::get('scene');

        $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => $scene,
            'goodstypes_id' => $goods_type,'comment' => $comment, 'rate' => $rate);
        Review::create($review);

        //登録成功
        return redirect('/single/?goodsid=' . $getgoods_id);

    }

}
