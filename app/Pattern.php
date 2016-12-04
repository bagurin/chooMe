<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pattern extends Model
{
    protected $table = 'patterns'; //テーブル名指定

    protected $fillable = [
        'id', 'name', 't_id'
    ];

    public function scopeGet_name($query,$id){
        return $query->select('name')->where('id',$id);
    }

//$rankgoods = Rank::join_goods()->leftjoin_genres()->select_rank()
//->where_rank($pattern, $goodstype)->orderBy_rank()->get()->toArray();
//
//    //App\Pattern　を追加してね。
//$pattern_name = Pattern::get_name($pattern)->get()->toArray();
//$pname = $pattern_name[0]['name'];
//
//
//$return_array = array("Type"=>"Ranking","Pattern"=>$pname);
//$items_array = array();
//
//foreach ($rankgoods as $val) {
//$item_array = array("Item"=>$val);
//
//$items_array = array_merge($items_array,array($item_array));
//}
//
//$return_array = array_merge($return_array,array("Items"=>$items_array));
//
//return json_encode($return_array, 256);

}
