<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admins extends Authenticatable
{
    use HasFactory;

    protected $table = 'admins';

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
}
