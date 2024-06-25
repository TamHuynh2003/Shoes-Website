<?php

namespace Database\Seeders;

use App\Models\Discounts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Discounts::factory()->count(10)->create();
    }
}
