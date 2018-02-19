<?php

namespace App;
//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class Member extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'password_confirmation', 'remember_token',
    ];



}



