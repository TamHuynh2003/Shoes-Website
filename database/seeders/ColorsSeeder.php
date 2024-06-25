<?php

namespace Database\Seeders;

use App\Models\Colors;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $color = ['Đỏ', 'Đen', 'Xám', 'Cam', 'Vàng', ' Hồng', 'Trắng'];

        foreach ($color as $name) {
            Colors::create([
                'name' => $name,
            ]);
        }
    }
}
