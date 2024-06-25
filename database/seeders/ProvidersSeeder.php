<?php

namespace Database\Seeders;

use App\Models\Providers;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProvidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Providers::factory()->count(5)->create();
    }
}
