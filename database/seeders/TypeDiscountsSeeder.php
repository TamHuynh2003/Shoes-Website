<?php

namespace Database\Seeders;

use App\Models\TypeDiscounts;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeDiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $type_discounts = ['Hóa Đơn', 'Sản Phẩm'];

        foreach ($type_discounts as $name) {
            TypeDiscounts::create([
                'name' => $name,
            ]);
        }
    }
}
