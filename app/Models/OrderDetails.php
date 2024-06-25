<?php

namespace App\Models;

use Faker\Provider\bg_BG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    public function orders()
    {
        return $this->belongsTo(Orders::class);
    }

    public function products()
    {
        return $this->belongsTo(Products::class);
    }

    public function colors()
    {
        return $this->belongsTo(Colors::class);
    }

    public function sizes()
    {
        return $this->belongsTo(Sizes::class);
    }
}
