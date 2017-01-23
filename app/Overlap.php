<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overlap extends Model
{
    //
    protected $table = 'overlaps';
    protected $primaryKey = 'goods_id';

    protected $fillable = [
        'goods_id', 'not_overlap',
    ];
}
