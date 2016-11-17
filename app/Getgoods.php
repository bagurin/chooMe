<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getgoods extends Model
{
//test
    protected $table = 'getgoods'; //テーブル名指定

    protected $fillable = [
        'id', 'name', 'genres_id', 'image', 'url'
    ];

}
