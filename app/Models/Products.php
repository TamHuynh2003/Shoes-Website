<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function images()
    {
        return $this->hasMany(ProductImages::class, 'products_id');
    }

    public function productDetails()
    {
        return $this->hasMany(ProductDetails::class);
    }

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }

    public function providers()
    {
        return $this->belongsTo(Providers::class, 'providers_id');
    }
}
