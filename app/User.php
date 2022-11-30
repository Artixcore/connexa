<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Overtrue\LaravelFollow\Traits\CanFollow;
// use Overtrue\LaravelFollow\Traits\CanBeFollowed;

class User extends Authenticatable
// implements MustVerifyEmail
{
     use Notifiable;
    //   CanFollow, CanBeFollowed;

    Protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','gender','email','password','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    function jobPosts(){
          return $this->hasMany('App\JobPost');
    }

    function workPost(){

          return $this->hasMany('App\NewJob');
    }

    function website(){
          return $this->hasMany('App\Website');
    }

    function company(){
         return $this->hasMany('App\Company');
    }

    function social(){
          return $this->hasMany('App\Social');
    }

    function cover(){
          return $this->hasMany('App\Cover');
    }

    function roles(){
        return $this->belongsToMany('App\Role');
    }

    function hasAnyRoles($roles){
        if($this->roles()->whereIn('urole', $roles)->first()){
        return true;
    }
    return false;
    }

    function hasRole($role){
        if($this->roles()->where('urole', $role)->first()){
        return true;
    }
    return false;
    }

}
