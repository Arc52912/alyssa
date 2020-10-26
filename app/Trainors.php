<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainors extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function courses() {
        return $this->hasMany('App\Course');
    }
}
