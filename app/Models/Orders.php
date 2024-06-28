<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'orders';

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function admins()
    {
        return $this->belongsTo(Admins::class);
    }

    public function discounts()
    {
        return $this->belongsTo(Discounts::class);
    }

    public function payment_methods()
    {
        return $this->belongsTo(PaymentMethods::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStates::class);
    }
}
