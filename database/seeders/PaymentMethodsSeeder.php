<?php

namespace Database\Seeders;

use App\Models\PaymentMethods;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment = ['MoMo', 'PayPal', 'Thanh Toán Khi Nhận Hàng'];

        foreach ($payment as $name) {
            PaymentMethods::create([
                'name' => $name,
            ]);
        }
    }
}
