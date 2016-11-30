<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    //
    protected $table = 'genres'; //テーブル名指定

    protected $fillable = [
        'id', 'name'
    ];
}
