<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Getgoods extends Model
{

    protected $table = 'getgoods'; //テーブル名指定

    protected $fillable = [
        'name', 'genresid', 'image'
    ];

}
