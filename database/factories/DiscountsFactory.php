<?php

namespace Database\Factories;

use App\Models\Discounts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discounts>
 */
class DiscountsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Discounts::class;


    public function definition(): array
    {
        $discountOptions = [
            1 => ['GiamGiaHoaDon5%', 'GiamGiaHoaDon10%', 'GiamGiaHoaDon15%', 'GiamGiaHoaDon20%', 'GiamGiaHoaDon25%', 'GiamGiaHoaDon30%', 'GiamGiaHoaDon40%'],
            2 => ['GiamGiaSanPham5%', 'GiamGiaSanPham10%', 'GiamGiaSanPham15%', 'GiamGiaSanPham20%', 'GiamGiaSanPham25%', 'GiamGiaSanPham30%', 'GiamGiaSanPham40%']
        ];

        $typeId = $this->faker->randomElement(array_keys($discountOptions));

        $name = $this->faker->randomElement($discountOptions[$typeId]);

        preg_match('/\d+/', $name, $matches);
        $amount = (int)$matches[0];

        return [
            'name' => $name,
            'amount' => $amount,
            'start_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 year'),
            'type_discounts_id' => $typeId,
            'is_deleted' => 1,
        ];
    }
}
