<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatble
{
    use Notifiable;
    
    protected $hidden = [
        'password', 'remember_token',
    ];
}
