<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    function users(){
        return $this->belongsToMany('App\User');
    }
}
