<?php

namespace App\Http\Controllers;

use App\Review;
use Request;
use Illuminate\Support\Facades\Session;
use App\Getgoods;
use App\User;
use Auth;

class ReviewController extends Controller
{

    // 商品名保持(一時データなのでリロードしたらエラーはかれる)
    public function getName()
    {
        // post内容を取得
        $postdata = Session::get('_old_input');

        return view('review',$postdata);
    }

    // レビューをデータベースに格納
    public function review(){

        // ユーザー名からID取得
        $user_name = Auth::user()->name;
        $user_id = -1;
        $users_table = User::all();
        foreach ($users_table as $user) {
            if($user_name == $user['name']){
                $user_id = $user['id'];
                break;
            }
        }


        // 商品名・コメント・評価点数取得
        $syohin = Request::get('name');
        $comment = Request::get('comment');
        $rate = Request::get('rate');
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

        $review = array('getgoods_id' => $getgoods_id, 'users_id' => $user_id, 'scenes_id' => 1, 'comment' => $comment, 'rate' => (int)$rate);
        Review::create($review);
        return redirect('/');
    }

}
