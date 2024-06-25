<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Customers::create([
        //     'fullname' => 'Tam Huynh',
        //     'email' => 'tamhuynh@gmail.com',
        //     'username' => 'tamhuynh'
        // ]);

        Users::factory()->count(10)->create();
    }
}
