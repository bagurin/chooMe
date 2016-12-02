<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    
    protected $table = 'ranks';

    protected $fillable = [
        'ranking_no', 'getgoods_id', 'score', 'average_rate', 'patterns_id'
    ];

    //getgoodsテーブルとranksテーブルをgetgoods_idをキーに
    public function scopeJoin_goods($query){
        return $query->join('getgoods', 'getgoods.id', '=', 'ranks.getgoods_id');
    }

    //ジャンルテーブルをleftjoin
    public function scopeLeftJoin_genres($query){
        return $query->leftjoin('genres', 'genres.id', '=', 'getgoods.genres_id');
    }

    //ランキング表示に必要な情報を取得
    public function scopeSelect_rank($query){
        return $query->select('ranks.ranking_no', 'ranks.getgoods_id',
            'getgoods.name', 'getgoods.image', 'ranks.average_rate', 'genres.name as genres');
    }

    //パターンidとgoodstypeidで条件検索
    public function scopeWhere_rank($query, $pattern, $type){
        return $query->where([['patterns_id', '=', $pattern], ['goodstypes_id', '=', $type]]);
    }

    //ランクングを昇順で並べ替え
    public function scopeOrderBy_rank($query){
        return $query->orderBy('ranks.ranking_no', 'asc');
    }

}
