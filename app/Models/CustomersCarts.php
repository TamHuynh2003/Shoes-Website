<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersCarts extends Model
{
    use HasFactory;

    protected $table = 'customer_carts';

    public function customers()
    {
        return $this->belongsTo(CustomersCarts::class);
    }

    public function products()
    {
        return $this->belongsTo(Products::class);
    }
}
