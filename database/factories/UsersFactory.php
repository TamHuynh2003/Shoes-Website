<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class UsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Users::class;

    private static $avatars = [
        'images/users/1.jpg',
        'images/users/2.jpg',
        'images/users/3.jpg',
        'images/users/4.jpg',
        'images/users/5.jpg',
        'images/users/6.jpg',
        'images/users/7.jpg',
        'images/users/8.jpg',
        'images/users/9.jpg',
        'images/users/10.jpg',
    ];

    public function definition(): array
    {

        // $files = File::files(public_path('images/users'));

        // if (empty($files)) {
        //     $imagePath = 'images/users/avatar.jpg';
        // } else {
        //     $randomFile = $files[array_rand($files)];

        //     $imagePath = 'images/users/' . $randomFile->getFilename();
        // }

        // $userAvatar = ['images/users/1.jpg', 'images/users/2.jpg', 'images/users/3.jpg', 'images/users/4.jpg', 'images/users/5.jpg', 'images/users/6.jpg', 'images/users/7.jpg', 'images/users/8.jpg', 'images/users/9.jpg', 'images/users/10.jpg'];
        $avatar = array_splice(self::$avatars, array_rand(self::$avatars), 1)[0];

        return [

            'fullname' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'email' => $this->faker->userName . '@gmail.com',

            'address' => $this->faker->address,
            'phone_number' => '0' . $this->faker->numerify('#########'),

            // 'image' => $this->faker->imageUrl(),
            // 'image' => 'https://randomuser.me/api/portraits/men/' . $this->faker->numberBetween(1, 99) . '.jpg',
            //'image' => $imagePath,  // Sử dụng đường dẫn của ảnh ngẫu nhiên

            'password' => Hash::make('123456'),
            'avatar' => $avatar,

            'birth_date' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'login_at' => $this->faker->dateTimeThisYear(),

            'genders_id' => $this->faker->numberBetween(1, 2),
            'roles_id' => 2,
            'status_id' => 1,
            // 'status_id' => $this->faker->numberBetween(1, 2),

        ];
    }
}
