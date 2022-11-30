<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
     function users(){
        return $this->belongsToMany('App\User');
    }
}
