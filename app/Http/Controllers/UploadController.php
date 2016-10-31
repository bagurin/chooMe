<?php

namespace App\Http\Controllers;

use Request;
use App\Wantgood;

class UploadController extends Controller
{

    public function postIndex()
    {

        // 商品名取得
        $syohin = Request::input('name');
        // 更新フラグ(true=更新する,false=更新しない)
        $update_flg = true;
//        // テーブル全件取得
//        $wantgoods_table = Wantgood::all();

//        foreach ($wantgoods_table as $wantgood){
//            // 同じ商品があったら更新フラグをfalseにし、ループを抜ける
//            if($syohin == $wantgood['name']){
//                $update_flg = false;
//                break;
//            }
//        }



        // 更新フラグがtrueなら更新処理
        if($update_flg == true) {

            // ジャンル番号を取得
            $genres = Request::input('genres');

            // アップロード画像を取得
            $image = Request::file('image');
//
//            // ファイル名を生成し画像をアップロード
//            $name = md5(sha1(uniqid(mt_rand(), true))) . '.' . $image->getClientOriginalExtension();
//            $upload = $image->move('media', $name);
//
//            // アップロード成功のメッセージを定義
//            $data = array(
//                'success' => '画像がアップロードされました',
//            );
//
//            // 画像保存先pathとファイル名を連結
//            $path = public_path() . 'media/' . $name;
//            // 配列にまとめてデータベースに追加
//            $getgood = array('name' => $syohin, 'genresid' => $genres, 'image' => $path);
//            Wantgood::create($getgood);

        }

        return $image;

        // メッセージをセッションに格納しリダイレクト
//        return Redirect::to(URL::to('/'))
//            ->with($data);
    }

    public function databaseIndex(){
        $a = Wantgood::all();
        return $a;
    }
}
