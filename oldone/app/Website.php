<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
  function users(){
        return $this->belongsToMany('App\User');
    }
} 
