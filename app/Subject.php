<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public function students(){
        return $this->belongsToMany('App\Student');
    }
}
