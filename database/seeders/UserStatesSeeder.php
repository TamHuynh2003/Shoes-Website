<?php

namespace Database\Seeders;

use App\Models\UserStates;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserStatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user_states = ['Hoạt Động ', 'Bị Khóa'];

        foreach ($user_states as $name) {
            UserStates::create([
                'name' => $name,
            ]);
        }
    }
}
