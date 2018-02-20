<?php

namespace App;
//use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;

class Hottler extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
         'username', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'password_confirmation', 'remember_token',
    ];



}
