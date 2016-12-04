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

}
