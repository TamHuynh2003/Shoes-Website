<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishLists extends Model
{
    use HasFactory;

    protected $table = 'wish_lists';

    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
