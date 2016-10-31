<?php

namespace App\Http\Controllers;

use Request;
use App\Getgoods;

class UploadController extends Controller
{

    public function postIndex()
    {

        // 商品名取得
        $syohin = Request::input('name');
        // 更新フラグ(true=更新する,false=更新しない)
        $update_flg = true;
        // テーブル全件取得
        $getgoods_table = Getgoods::all();

        foreach ($getgoods_table as $wantgood){
            // 同じ商品があったら更新フラグをfalseにし、ループを抜ける
            if($syohin == $wantgood['name']){
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
            // 配列にまとめてデータベースに追加
            $getgoods = array('name' => $syohin, 'genresid' => (int)$genres, 'image' => $path);
            Getgoods::create($getgoods);

        }
        return redirect('/');
    }

}
