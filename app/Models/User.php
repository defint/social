<?php

namespace Social\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'location',
        'email',
        'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
}