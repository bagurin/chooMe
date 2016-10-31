<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wantgood extends Model
{
    //
    protected $table = 'wantgoods'; //テーブル名指定

    protected $fillable = [
        'name', 'genresid', 'image'
    ];
}
