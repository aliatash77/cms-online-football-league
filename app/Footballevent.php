<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footballevent extends Model
{
    protected $fillable = [
        'userId', 'userName','cupId','eventKey','number','capacity'
        ,'startPoint','endPoint',
    ];
}
