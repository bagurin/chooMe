<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $table = 'reviews'; //テーブル名指定

    protected $fillable = [
        'getgoods_id', 'users_id', 'scenes_id', 'goodstypes_id', 'comment', 'rate'
    ];

    public function scopeJoin_goodstyepes($query){
        return $query->join('goodstypes', 'reviews.goodstypes_id', '=', 'goodstypes.id');
    }

    public function scopeLeftJoin_scene($query){
        return $query->leftjoin('scenes', 'reviews.scenes_id', '=', 'scenes.id');
    }

    public function scopeSelect_review($query){
        return $query->select('reviews.comment', 'reviews.rate', 'scenes.name as scene', 'goodstypes.name as goodstype');
    }

    public function scopeSelect_wreview($query){
        return $query->select('reviews.comment', 'reviews.rate', 'goodstypes.name as goodstype');
    }

    public function scopeWhere_goods($query, $goods_id){
        return $query->where('reviews.getgoods_id', '=', $goods_id);
    }

    public function scopeWhere_goodstype($query, $goodstype){
        return $query->where('reviews.goodstypes_id', '=', $goodstype);
    }

    public function scopeOrderBy_rate($query){
        return $query->orderBy('reviews.rate', 'desc');
    }

}
