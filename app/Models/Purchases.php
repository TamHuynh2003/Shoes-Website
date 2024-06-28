<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;

    protected $table = 'purchases';

    public function providers()
    {
        return $this->belongsTo(Providers::class);
    }

    public function admins()
    {
        return $this->belongsTo(Admins::class);
    }

    public function status()
    {
        return $this->belongsTo(OrderStates::class);
    }
}
