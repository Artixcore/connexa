<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
     function users(){
        return $this->belongsToMany('App\User');
    }
}
