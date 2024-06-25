<?php

namespace Database\Factories;

use App\Models\Providers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Providers>
 */
// class ProvidersFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */
//     protected $model = Providers::class;

//     public function definition(): array
//     {

//         $providers = [
//             'Nhà Cung Cấp Giày Adidas' => 'Cung cấp các mặt hàng về giày Adidas',
//             'Nhà Cung Cấp Giày Nike' => 'Cung cấp các mặt hàng về giày Nike',
//             'Nhà Cung Cấp Giày Vans' => 'Cung cấp các mặt hàng về giày Vans',
//             'Nhà Cung Cấp Giày Puma' => 'Cung cấp các mặt hàng về giày Puma',
//             'Nhà Cung Cấp Giày Converse' => 'Cung cấp các mặt hàng về giày Converse'
//         ];

//         $name = $this->faker->randomElement(array_keys($providers));
//         $description = $providers[$name];


//         return [
//             'name' => $name,
//             'email' => $this->faker->userName . '@company.com',

//             'phone_number' => '0' . $this->faker->numerify('#########'),
//             'address' => $this->faker->address,

//             'descriptions' => $description,
//         ];
//     }
// }

class ProvidersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Providers::class;

    public function definition(): array
    {
        $providers = [
            'Nhà Cung Cấp Giày Adidas' => 'Cung cấp các mặt hàng về giày Adidas',
            'Nhà Cung Cấp Giày Nike' => 'Cung cấp các mặt hàng về giày Nike',
            'Nhà Cung Cấp Giày Vans' => 'Cung cấp các mặt hàng về giày Vans',
            'Nhà Cung Cấp Giày Puma' => 'Cung cấp các mặt hàng về giày Puma',
            'Nhà Cung Cấp Giày Converse' => 'Cung cấp các mặt hàng về giày Converse'
        ];

        $name = $this->faker->unique()->randomElement(array_keys($providers));
        $description = $providers[$name];

        return [
            'name' => $name,
            'email' => $this->faker->unique()->userName . '@company.com',
            'phone_number' => '09' . $this->faker->numerify('########'),
            'address' => $this->faker->address,
            'descriptions' => $description,
        ];
    }

    /**
     * Reset the unique generator for Faker.
     */
    public function resetFaker()
    {
        $this->faker->unique(true);
    }
}
