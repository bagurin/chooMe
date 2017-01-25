<?php

namespace App\Http\Controllers;

use App\Getgoods;
use App\Rank;
use Auth;
use Session;
use App\Pattern;
use App\Review;

class RankingViewController extends Controller
{

    //ジャンル格納
    public function getGenre(){

        if(!isset($_GET['genre'])){
            return 'ジャンルIDが存在しません。';
        }
        Session::put('genres_id',(int)$_GET['genre']);

        return redirect('/bygenres/');

    }

    //ジャンル別商品データ
    public function genreGoods(){

        $genres_id = Session::get('genres_id');

        $goods_data = Getgoods::join_genres()->select_goods()->where_genres($genres_id)->paginate(10);

        return $goods_data;

    }

    //商品ページ表示
    public function goodsView(){

        if(!isset($_GET['goodsid'])){
            return '商品IDが存在しません。';
        }
        $goods_id = (int)$_GET['goodsid'];

        $goods_data = Getgoods::join_genres()->select_goodssingle()->where_goods($goods_id)->get()->toArray();
        dd($goods_data);

        $getgoods = Review::join_goodstyepes()->leftjoin_scene()->select_review()
            ->where_goods($goods_id)->where_goodstype(1)->orderby_rate()->get()->toArray();

        $wantgoods = Review::join_goodstyepes()->leftjoin_scene()->select_review()
            ->where_goods($goods_id)->where_goodstype(2)->orderby_rate()->get()->toArray();

        return view('single', compact('goods_data', 'getgoods', 'wantgoods'));

    }

    //ランキング表示
    public function rankView(){

        // ランキング用idをセッションに
        if(isset($_GET['pattern'])){
            Session::put('pattern', (int)htmlspecialchars($_GET['pattern']));
        }

        // goodstypeをセッションに
        if(isset($_GET['getgoodstype'])){
            Session::put('goodstype', (int)htmlspecialchars($_GET['getgoodstype']));
        }

        // ゲストユーザーかつ商品登録をしていない or 登録ユーザーかつ１日１回商品登録をしていないなら商品登録
//        if(Auth::guest() && !Session::get('connect') || !Auth::guest() && !Auth::user()->connect) {
//            return redirect('/register-or-review/');
//        }

        // ランキングパターンid
        $pattern = Session::get('pattern');
        $pattern_name = Pattern::where('id', $pattern)->get(['name'])->toArray();
        $pattern_name = $pattern_name[0]['name'];

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

        //ランキング配列とパターン名
        return view('scene', compact('ranking', 'pattern_name'));
    }

}