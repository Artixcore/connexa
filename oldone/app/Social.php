<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
      function users(){
        return $this->belongsToMany('App\User');
    }
}