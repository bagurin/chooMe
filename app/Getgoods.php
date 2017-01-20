<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getgoods extends Model
{

    protected $table = 'getgoods'; //テーブル名指定

    protected $fillable = [
        'id', 'name', 'genres_id', 'image', 'url'
    ];

    //getgoodsテーブルとgenresテーブルをgenres_idをキーに
    public function scopeJoin_genres($query){
        return $query->join('genres', 'genres.id', '=', 'getgoods.genres_id');
    }

    //商品情報をまとめる
    public function scopeSelect_goods($query){
        return $query->select('getgoods.id',
            'getgoods.name', 'getgoods.image', 'genres.name as genres');
    }

    //goodsidで条件検索
    public function scopeWhere_goods($query, $goods_id){
        return $query->where('getgoods.id', '=', $goods_id);
    }

    public function scopeWhere_genres($query, $genres_id){
        return $query->where('getgoods.genres_id', '=', $genres_id);
    }

}
