<?php

namespace Database\Seeders;

use App\Models\Admins;
use App\Models\Customers;
use App\Models\Discounts;
use App\Models\Orders;
use App\Models\ProductTypes;
use App\Models\TypeDiscounts;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([

            SizesSeeder::class,
            ColorsSeeder::class,

            RolesSeeder::class,
            GendersSeeder::class,

            UserStatesSeeder::class,
            OrderStatesSeeder::class,

            TypeDiscountsSeeder::class,
            PaymentMethodsSeeder::class,

            CategoriesSeeder::class,
            DiscountsSeeder::class,

            ProvidersSeeder::class,

            ProductsSeeder::class,
            ProductImagesSeeder::class,
            ProductDetailsSeeder::class,

            AdminsSeeder::class,
            UsersSeeder::class,
        ]);
    }
}
