<?php

namespace Database\Seeders;

use App\Models\Sizes;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $size = ['37', '38', '39', '40', '41', '42', '43'];

        foreach ($size as $name) {
            Sizes::create([
                'name' => $name,
            ]);
        }
    }
}
