<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footballcup extends Model
{
    protected $fillable = [
        'category_id', 'cupName','image','entryFee','gameName','gameDescription'
        ,'capacity','fPrize','sPrize','tPrize','foPrize','fRankPrize','sRankPrize',
    ];
}

