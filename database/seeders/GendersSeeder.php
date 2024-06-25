<?php

namespace Database\Seeders;

use App\Models\Genders;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = ['Nam', 'Nữ', 'Khác'];

        foreach ($genders as $name) {
            Genders::create([
                'name' => $name,
            ]);
        }
    }
}
