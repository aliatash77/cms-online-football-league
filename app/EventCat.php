<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCat extends Model
{
    protected $fillable = [
        'name', 'parent_id',
    ];
    public function children(){
        return $this->hasMany('App\EventCat','parent_id');
    }
}
