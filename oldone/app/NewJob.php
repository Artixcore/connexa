<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewJob extends Model
{
    
      protected $table = 'new_jobs';
      protected $fillable = ['job_desc', 'job_title', 'postedBy'];

    function users(){
        return $this->belongsTo('App\User');
    }
}
