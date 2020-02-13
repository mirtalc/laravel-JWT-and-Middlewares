<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//JWT Add use
use Tymon\JWTAuth\Contracts\JWTSubject;

//JWT Add implementation of Interface
class User extends Authenticatable implements JWTSubject
{
    use Notifiable;
    /**
     * Database table. If commented, Pluralize will set it to "Users"
     */
    //protected $table = "usuarios";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    //JWT
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    //JWT
    public function getJWTCustomClaims()
    {
        return [];
    }
}