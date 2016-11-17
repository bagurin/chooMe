<?php

namespace App\Http\Controllers;

use Request;
use App\Getgoods;

class UploadController extends Controller
{

    // 商品をデータベースに格納しレビューページに遷移
    public function postIndex()
    {

        // 商品名取得
        $syohin = Request::input('name');

        // 更新フラグ(true=更新する,false=更新しない)
        $update_flg = true;
        // テーブル全件取得
        $getgoods_table = Getgoods::all();

        foreach ($getgoods_table as $getgoods){
            // 同じ商品があったら更新フラグをfalseにし、ループを抜ける
            if($syohin == $getgoods['name']){
                $update_flg = false;
                break;
            }
        }

        // 更新フラグがtrueなら更新処理
        if($update_flg == true) {

            // ジャンル番号を取得
            $genres = Request::input('genres');

            // アップロード画像を取得
            $image = Request::file('image');

            // ファイル名を生成し画像をアップロード
            $name = md5(sha1(uniqid(mt_rand(), true))) . '.' . $image->getClientOriginalExtension();
            $image->move('media', $name);

            // 画像保存先pathとファイル名を連結
            $path = public_path() . 'media/' . $name;

            //url生成
            $url = 'https://www.amazon.co.jp/gp/search/ref=nb_sb_noss_1?__mk_ja_JP=%E3%82%AB%E3%82%BF%E3%82%AB%E3%83%8A&url=search-alias%3Daps&field-keywords=' . $syohin;

            // 配列にまとめてデータベースに追加
            $getgoods = array('name' => $syohin, 'genres_id' => (int)$genres, 'image' => $path, 'url' => $url);
            Getgoods::create($getgoods);

        }

        return redirect('/review')->withInput();

    }

}
