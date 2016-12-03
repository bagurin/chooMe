<?php

namespace App\Http\Controllers;

use App\Getgoods;
use App\Rank;
use Auth;
use Session;
use App\Genres;

class RankingViewController extends Controller
{

    //ランキング表示
    public function rankView(){

        // ランキング用idをセッションに
        if(isset($_GET['pattern'])){
            Session::put('pattern', (int)htmlspecialchars($_GET['pattern']));
        }

        // ゲストユーザーかつ商品登録をしていないなら商品登録
        if(Auth::guest() && Session::get('connect') != true){
            return redirect('/register-or-review/');
        }

        //ユーザーのconnect列がfalseなら商品登録
        if(!Auth::user()->connect){
            return redirect('/register-or-review/');
        }

        // goodstypeをセッションに
        if(isset($_GET['goodstype'])){
            Session::put('goodstype', (int)htmlspecialchars($_GET['goodstype']));
        }

        // ランキングパターンid
        $pattern = Session::get('pattern');

        // goodstype
        $goodstype = Session::get('goodstype');

        $rankgoods = Rank::join_goods()->leftjoin_genres()->select_rank()
            ->where_rank($pattern, $goodstype)->orderBy_rank()->get();

        $ranking = array();

        foreach ($rankgoods as $key => $val) {

            //オブジェクトを連想配列へ変換
            $array = json_decode(json_encode($val), true);

            $ranking[] = $array;

        }

        Session::forget('connect');

        return view('scene', compact('ranking'));

    }

}