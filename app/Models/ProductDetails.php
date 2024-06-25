<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    protected $table = 'product_details';

    public function products()
    {
        return $this->belongsTo(Products::class, 'products_id');
    }

    public function colors()
    {
        return $this->hasMany(Colors::class, 'id', 'colors_id');
    }

    public function sizes()
    {
        return $this->hasMany(Sizes::class, 'id', 'sizes_id');
    }
}
