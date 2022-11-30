<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
     function users(){
        return $this->belongsToMany('App\User');
    }
}
