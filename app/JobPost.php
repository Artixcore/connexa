<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
      Protected $table = 'users';

    function users(){
        return $this->belongsTo('App\User');
    }
}
