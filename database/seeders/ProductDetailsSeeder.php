<?php

namespace Database\Seeders;

use App\Models\ProductDetails;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 32; $i++) {
            for ($j = 1; $j <= rand(1, 5); $j++) {
                ProductDetails::create([
                    'quantity' => rand(20, 50),
                    'products_id' => $i,
                    'colors_id' => rand(1, 7),
                    'sizes_id' => rand(1, 7),
                ]);
            }
        }
    }
}
