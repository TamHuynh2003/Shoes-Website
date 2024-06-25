<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    use HasFactory;

    protected $table = 'discounts';

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function type_discounts()
    {
        return $this->belongsTo(TypeDiscounts::class);
    }
}
