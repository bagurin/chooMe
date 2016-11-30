<?php

namespace App\Http\Controllers;

use App\Getgoods;
use App\Rank;
use Auth;
use Session;
use App\Genres;

class RankingViewController extends Controller
{

    //追加メソッド
    public function rankView(){

        // ランキング用idをセッションに
        if(isset($_GET['id'])){
            Session::put('id', (int)htmlspecialchars($_GET['id']));
        }

        // ゲストユーザーかつ商品登録をしていないなら商品登録
        if(Auth::guest() && Session::get('connect') != true){
            return redirect('/register-or-review/');
        }

        //ユーザーのconnect列がfalseなら商品登録
        if(!Auth::user()->connect){
            return redirect('/register-or-review/');
        }

        // ランキングパターンid
        $id = Session::get('id');
        //ランキングテーブル全取得
        $rank_table = Rank::all();
        //商品テーブル全取得
        $getgoods_table = Getgoods::all();
        //ジャンルテーブル
        $genres_table = Genres::all();
        $genres_name = '';

        $ranking = array();

        foreach($rank_table as $rank){
            if($rank['patterns_id'] == $id) {
                foreach ($getgoods_table as $getgoods) {
                    if ($rank['getgoods_id'] == $getgoods['id']) {
                        foreach ($genres_table as $genres){
                            if($genres['id'] == $getgoods['genres_id']){
                                $genres_name = $genres['name'];
                                break;
                            }
                        }
                        $ranking[] = array('ranking_no' => $rank['ranking_no'], 'name' => $getgoods['name'],
                                                'image' => $getgoods['image'], 'genres' => $genres_name,
                                                'rate' => $rank['average_rate'], 'url' => $getgoods['url']);
                        break;
                    }
                }
            }
        }

        Session::forget('connect');

        return view('scene', compact('ranking'));

    }

}