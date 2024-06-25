<?php

namespace Database\Seeders;

use App\Models\OrderStates;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders_states = ['Chờ Duyệt', 'Đã Duyệt', 'Đã Hủy', 'Đang Giao', 'Đã Giao'];

        foreach ($orders_states as $name) {
            OrderStates::create([
                'name' => $name,
            ]);
        }
    }
}
