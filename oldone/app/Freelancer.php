<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freelancer extends Model
{
     protected $fillable = ['freelancer_id'];

    function user(){
        return $this->belongsTo('App\User');
    }
}
