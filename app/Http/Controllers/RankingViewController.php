<?php

namespace App\Http\Controllers;

use App\Getgoods;
use App\Rank;
use Auth;

class RankingViewController extends Controller
{

    //追加メソッド
    public function rankView(){

        //ユーザーのconnect列がfalseなら商品登録
        if(!Auth::user()->connect){
            return redirect('/product-register/');
        }

        //ランキングテーブル全取得
        $rank_table = Rank::all();
        //商品/Users/masashi0729/Desktop/UploadController.phpテーブル全取得
        $getgoods_table = Getgoods::all();

        $ranking = array();
        $id = (int)$_GET['id'];

        foreach($rank_table as $rank){
            if($rank['patterns_id'] == $id) {
                foreach ($getgoods_table as $getgoods) {
                    if ($rank['getgoods_id'] == $getgoods['id']) {
                        $ranking[] = array('ranking_no' => $rank['ranking_no'], 'name' => $getgoods['name'], 'image' => $getgoods['image'], 'genres' => $getgoods['genres_id'], 'scenes' => 1, 'rate' => $rank['average_rate'], 'url' => $getgoods['url']);
                        break;
                    }
                }
            }
        }

        return view('scene', compact('ranking'));

    }

}
