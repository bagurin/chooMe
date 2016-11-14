<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $table = 'reviews'; //テーブル名指定

    protected $fillable = [
        'getgoods_id', 'users_id', 'scenes_id', 'comment', 'rate'
    ];

}
