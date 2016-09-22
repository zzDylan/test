<?php

namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser as SentinelEloquentUser;

class User extends SentinelEloquentUser
{
    protected $loginNames = [ 'email','name'];
     protected $fillable = ['name','email','password'];
    public function contacts()
    {
        return $this->hasMany('App\Models\Contacts');
    }

}
