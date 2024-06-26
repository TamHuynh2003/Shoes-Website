<?php

namespace Database\Seeders;

use App\Models\ProductDetails;
use Illuminate\Database\Seeder;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            for ($color = 1; $color <= 7; $color++) {
                for ($size = 1; $size <= 7; $size++) {
                    ProductDetails::create([
                        'quantity' => rand(15, 85),
                        'products_id' => $i,
                        'colors_id' => $color,
                        'sizes_id' => $size,
                    ]);
                }
            }
        }
    }
}
