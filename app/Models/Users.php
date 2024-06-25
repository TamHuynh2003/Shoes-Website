<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Users extends Authenticatable implements JWTSubject
{
    use HasFactory;

    protected $table = 'users';

    public function roles()
    {
        return $this->belongsTo(Roles::class);
    }

    public function genders()
    {
        return $this->belongsTo(Genders::class);
    }

    public function status()
    {
        return $this->belongsTo(UserStates::class);
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
