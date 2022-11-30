<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
     function users(){
        return $this->belongsToMany('App\User');
    }
}
