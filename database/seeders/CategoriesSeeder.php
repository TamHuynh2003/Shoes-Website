<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Giày Adidas ', 'Giày Nike ', 'Giày Vans ', 'Giày Puma ', 'Giày Converse '
        ];

        foreach ($categories as $name) {

            Categories::create([
                'name' => $name,
            ]);
        }
    }
}
