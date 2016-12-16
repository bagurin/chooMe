<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'users'; //テーブル名指定

    protected $fillable = [
        'name', 'email', 'password','age','sex','hobbies_id','connect'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
