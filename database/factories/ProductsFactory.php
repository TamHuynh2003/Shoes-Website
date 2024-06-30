<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Products::class;

    protected static $usedNames = [];

    public function definition(): array
    {
        $categoryDetails = [
            [
                'name' => 'Adidas F50',
                'descriptions' => 'Là một đôi giày chạy có mức giá hấp dẫn và chất lượng tốt hơn nhiều so với mức giá của nó. Đây là kết quả của việc Adidas cố gắng tăng hiệu năng chạy bộ, cắt giảm những chi tiết không cần thiết tới việc chạy.'
            ],
            [
                'name' => 'Adidas Continental',
                'descriptions' => 'Giày Chạy Bộ Nam không chỉ là người bạn đồng hành đáng tin cậy trên đường chạy, mà còn là cầu nối đưa bạn từ những buổi tập cuối tuần đến vạch đích vinh quang.'
            ],
            [
                'name' => 'Adidas Courtic',
                'descriptions' => 'Giày là một tuyệt phẩm của sự sáng tạo thời trang, là sự kết hợp hoàn hảo giữa phong cách cổ điển và nét hiện đại.'
            ],
            [
                'name' => 'Adidas Supper Star',
                'descriptions' => 'Giày là một trong những thương hiệu hàng đầu của Đức, đứng đầu trong lĩnh vực sản xuất giày, quần áo và phụ kiện. Với những thiết kế năng động và thoải mái Puma nhanh chóng trở thành sự lựa chọn hàng đầu của giới trẻ hiện nay.'
            ],
            [
                'name' => 'Adidas Campus',
                'descriptions' => 'Giày ban đầu được bậc thầy bóng rổ Chuck Taylor quảng bá cho sự linh hoạt và lợi ích trên sân bóng.'
            ],
            [
                'name' => 'Nike Campus',
                'descriptions' => 'Giày ban đầu được bậc thầy bóng rổ Chuck Taylor quảng bá cho sự linh hoạt và lợi ích trên sân bóng.'
            ],
            [
                'name' => 'Nike F50',
                'descriptions' => 'Là một đôi giày chạy có mức giá hấp dẫn và chất lượng tốt hơn nhiều so với mức giá của nó. Đây là kết quả của việc Adidas cố gắng tăng hiệu năng chạy bộ, cắt giảm những chi tiết không cần thiết tới việc chạy.'
            ],
            [
                'name' => 'Nike Continental',
                'descriptions' => 'Giày Chạy Bộ Nam không chỉ là người bạn đồng hành đáng tin cậy trên đường chạy, mà còn là cầu nối đưa bạn từ những buổi tập cuối tuần đến vạch đích vinh quang.'
            ],
            [
                'name' => 'Nike Courtic',
                'descriptions' => 'Giày là một tuyệt phẩm của sự sáng tạo thời trang, là sự kết hợp hoàn hảo giữa phong cách cổ điển và nét hiện đại.'
            ],
            [
                'name' => 'Nike Supper Star',
                'descriptions' => 'Giày là một trong những thương hiệu hàng đầu của Đức, đứng đầu trong lĩnh vực sản xuất giày, quần áo và phụ kiện. Với những thiết kế năng động và thoải mái Puma nhanh chóng trở thành sự lựa chọn hàng đầu của giới trẻ hiện nay.'
            ],
            [
                'name' => 'Vans Campus',
                'descriptions' => 'Giày ban đầu được bậc thầy bóng rổ Chuck Taylor quảng bá cho sự linh hoạt và lợi ích trên sân bóng.'
            ],
            [
                'name' => 'Vans F50',
                'descriptions' => 'Là một đôi giày chạy có mức giá hấp dẫn và chất lượng tốt hơn nhiều so với mức giá của nó. Đây là kết quả của việc Adidas cố gắng tăng hiệu năng chạy bộ, cắt giảm những chi tiết không cần thiết tới việc chạy.'
            ],
            [
                'name' => 'Vans Continental',
                'descriptions' => 'Giày Chạy Bộ Nam không chỉ là người bạn đồng hành đáng tin cậy trên đường chạy, mà còn là cầu nối đưa bạn từ những buổi tập cuối tuần đến vạch đích vinh quang.'
            ],
            [
                'name' => 'Vans Courtic',
                'descriptions' => 'Giày là một tuyệt phẩm của sự sáng tạo thời trang, là sự kết hợp hoàn hảo giữa phong cách cổ điển và nét hiện đại.'
            ],
            [
                'name' => 'Vans Supper Star',
                'descriptions' => 'Giày là một trong những thương hiệu hàng đầu của Đức, đứng đầu trong lĩnh vực sản xuất giày, quần áo và phụ kiện. Với những thiết kế năng động và thoải mái Puma nhanh chóng trở thành sự lựa chọn hàng đầu của giới trẻ hiện nay.'
            ],
            [
                'name' => 'Puma Campus',
                'descriptions' => 'Giày ban đầu được bậc thầy bóng rổ Chuck Taylor quảng bá cho sự linh hoạt và lợi ích trên sân bóng.'
            ],
            [
                'name' => 'Puma F50',
                'descriptions' => 'Là một đôi giày chạy có mức giá hấp dẫn và chất lượng tốt hơn nhiều so với mức giá của nó. Đây là kết quả của việc Adidas cố gắng tăng hiệu năng chạy bộ, cắt giảm những chi tiết không cần thiết tới việc chạy.'
            ],
            [
                'name' => 'Puma Continental',
                'descriptions' => 'Giày Chạy Bộ Nam không chỉ là người bạn đồng hành đáng tin cậy trên đường chạy, mà còn là cầu nối đưa bạn từ những buổi tập cuối tuần đến vạch đích vinh quang.'
            ],
            [
                'name' => 'Puma Courtic',
                'descriptions' => 'Giày là một tuyệt phẩm của sự sáng tạo thời trang, là sự kết hợp hoàn hảo giữa phong cách cổ điển và nét hiện đại.'
            ],
            [
                'name' => 'Puma Supper Star',
                'descriptions' => 'Giày là một trong những thương hiệu hàng đầu của Đức, đứng đầu trong lĩnh vực sản xuất giày, quần áo và phụ kiện. Với những thiết kế năng động và thoải mái Puma nhanh chóng trở thành sự lựa chọn hàng đầu của giới trẻ hiện nay.'
            ],
            [
                'name' => 'Converse Campus',
                'descriptions' => 'Giày ban đầu được bậc thầy bóng rổ Chuck Taylor quảng bá cho sự linh hoạt và lợi ích trên sân bóng.'
            ],
            [
                'name' => 'Converse F50',
                'descriptions' => 'Là một đôi giày chạy có mức giá hấp dẫn và chất lượng tốt hơn nhiều so với mức giá của nó. Đây là kết quả của việc Adidas cố gắng tăng hiệu năng chạy bộ, cắt giảm những chi tiết không cần thiết tới việc chạy.'
            ],
            [
                'name' => 'Converse Continental',
                'descriptions' => 'Giày Chạy Bộ Nam không chỉ là người bạn đồng hành đáng tin cậy trên đường chạy, mà còn là cầu nối đưa bạn từ những buổi tập cuối tuần đến vạch đích vinh quang.'
            ],
            [
                'name' => 'Converse Courtic',
                'descriptions' => 'Giày là một tuyệt phẩm của sự sáng tạo thời trang, là sự kết hợp hoàn hảo giữa phong cách cổ điển và nét hiện đại.'
            ],
            [
                'name' => 'Converse Supper Star',
                'descriptions' => 'Giày là một trong những thương hiệu hàng đầu của Đức, đứng đầu trong lĩnh vực sản xuất giày, quần áo và phụ kiện. Với những thiết kế năng động và thoải mái Puma nhanh chóng trở thành sự lựa chọn hàng đầu của giới trẻ hiện nay.'
            ],
        ];

        $availableProducts = array_filter($categoryDetails, function ($product) {
            return !in_array($product['name'], self::$usedNames);
        });

        if (empty($availableProducts)) {
            self::$usedNames = [];
            $availableProducts = $categoryDetails;
        }

        $productDetails = Arr::random($availableProducts);
        self::$usedNames[] = $productDetails['name'];

        $categoryIdProviderIdMap = [
            'Adidas' => 1,
            'Nike' => 2,
            'Vans' => 3,
            'Puma' => 4,
            'Converse' => 5
        ];

        $brand = explode(' ', $productDetails['name'])[0];
        $categoryId = $categoryIdProviderIdMap[$brand];
        $providerId = $categoryIdProviderIdMap[$brand];

        $purchasePrices = [350000, 400000, 500000, 600000, 750000, 800000, 1000000, 1250000, 1500000, 1750000, 1850000, 1900000];
        $sellingPrices = [550000, 600000, 650000, 700000, 850000, 950000, 1100000, 1200000, 1450000, 1700000, 1850000, 1950000, 2000000];

        do {
            $purchasePrice = $this->faker->randomElement($purchasePrices);
            $prices = array_filter($sellingPrices, function ($price) use ($purchasePrice) {
                return $price > $purchasePrice + 300000;
            });
        } while (empty($prices));

        $sellingPrice = $this->faker->randomElement($prices);


        return [
            'name' => $productDetails['name'],
            'descriptions' => $productDetails['descriptions'],

            // 'purchase_price' => $this->faker->numberBetween(300000, 1000000),
            // 'selling_price' => $this->faker->numberBetween(400000, 4000000) + 200000,

            // 'purchase_price' => $this->faker->randomElement($purchasePrices),
            // 'selling_price' => $this->faker->randomElement($sellingPrices),

            'purchase_price' => $purchasePrice,
            'selling_price' => $sellingPrice,

            'rating' => $this->faker->numberBetween(3, 5),
            'categories_id' => $categoryId,
            'providers_id' => $providerId,
            'is_deleted' => 1,
            // 'is_deleted' => $this->faker->numberBetween(0, 1),
        ];
    }
}
