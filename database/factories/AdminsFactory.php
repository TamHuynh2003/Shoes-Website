<?php

namespace Database\Factories;

use App\Models\Admins;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    /**
     * 
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Admins::class;

    private static $avatars = [
        'images/admins/1.jpg',
        'images/admins/2.jpg',
        'images/admins/3.jpg',
        'images/admins/4.jpg',
        'images/admins/5.jpg',
        'images/admins/6.jpg',
        'images/admins/7.jpg',
        'images/admins/8.jpg',
        'images/admins/9.jpg',
        'images/admins/10.jpg',
    ];

    public function definition(): array
    {


        // $files = File::files(public_path('images/admins'));

        // if (empty($files)) {
        //     $imagePath = 'images/admins/avatar.jpg';
        // } else {
        //     $randomFile = $files[array_rand($files)];

        //     $imagePath = 'images/admins/' . $randomFile->getFilename();
        // }

        $admins = [
            [
                'username' => 'tamhuynh',
                'email' => 'tamhuynh@coza.com',
                'fullname' => 'Tâm Huỳnh'
            ],
            [
                'username' => 'minhtam',
                'email' => 'minhtam@coza.com',
                'fullname' => 'Minh Tâm'
            ],
            [
                'username' => 'huynhtam',
                'email' => 'huynhtam@coza.com',
                'fullname' => 'Huỳnh Tâm'
            ],
            [
                'username' => 'tam2003',
                'email' => 'tam2003@coza.com',
                'fullname' => 'Tâm'
            ],
            [
                'username' => 'huynhminhtam',
                'email' => 'huynhminhtam@coza.com',
                'fullname' => 'Huỳnh Minh Tâm'
            ],
            [
                'username' => 'truongnguyen',
                'email' => 'truongnguyen@coza.com',
                'fullname' => 'Trường Nguyễn'
            ],
            [
                'username' => 'minhtruong',
                'email' => 'minhtruong@coza.com',
                'fullname' => 'Minh Trường'
            ],
            [
                'username' => 'nguyentruong',
                'email' => 'nguyentruong@coza.com',
                'fullname' => 'Nguyễn Trường'
            ],
            [
                'username' => 'truong2003',
                'email' => 'truong2003@coza.com',
                'fullname' => 'Trường'
            ],
            [
                'username' => 'nguyenminhtruong',
                'email' => 'nguyenminhtruong@coza.com',
                'fullname' => 'Nguyễn Minh Trường'
            ],
        ];

        $index = $this->faker->unique()->numberBetween(0, 9);

        $avatar = array_splice(self::$avatars, array_rand(self::$avatars), 1)[0];

        return [
            'fullname' => $admins[$index]['fullname'],
            'email' => $admins[$index]['email'],

            'address' => $this->faker->address,
            'phone_number' => '09' . $this->faker->numerify('########'),

            'username' => $admins[$index]['username'],
            'password' => Hash::make('111'),

            'birth_date' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'avatar' => $avatar,

            'salary' => $this->faker->numberBetween(500, 3000),
            'login_at' => $this->faker->dateTimeThisYear(),

            'genders_id' => 1,
            'roles_id' => 1,

            'status_id' => 1,
            // 'status_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
