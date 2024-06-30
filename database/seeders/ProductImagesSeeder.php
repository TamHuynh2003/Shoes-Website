<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\ProductImages;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryImages = [
            1 => ['images/products/adidas1.png', 'images/products/adidas2.png', 'images/products/adidas3.png', 'images/products/adidas4.png', 'images/products/adidas5.png', 'images/products/adidas6.png', 'images/products/adidas7.png', 'images/products/adidas8.png', 'images/products/adidas9.png', 'images/products/adidas10.png'],
            2 => ['images/products/nike1.png', 'images/products/nike2.png', 'images/products/nike3.png', 'images/products/nike4.png', 'images/products/nike5.png', 'images/products/nike6.png', 'images/products/nike7.png', 'images/products/nike8.png', 'images/products/nike9.png', 'images/products/nike10.png'],
            3 => ['images/products/vans1.png', 'images/products/vans2.png', 'images/products/vans3.png', 'images/products/vans4.png', 'images/products/vans5.png', 'images/products/vans6.png', 'images/products/vans7.png', 'images/products/vans8.png', 'images/products/vans9.png', 'images/products/vans10.png'],
            4 => ['images/products/puma1.png', 'images/products/puma2.png', 'images/products/puma3.png', 'images/products/puma4.png', 'images/products/puma5.png', 'images/products/puma6.png', 'images/products/puma7.png', 'images/products/puma8.png', 'images/products/puma9.png', 'images/products/puma10.png'],
            5 => ['images/products/con1.png', 'images/products/con2.png', 'images/products/con3.png', 'images/products/con4.png', 'images/products/con5.png', 'images/products/con6.png', 'images/products/con7.png', 'images/products/con8.png', 'images/products/con9.png', 'images/products/con10.png'],
        ];

        for ($i = 1; $i <= 40; $i++) {
            $products = Products::find($i);
            $categoryId = $products->categories_id;

            if (isset($categoryImages[$categoryId])) {
                $images = $categoryImages[$categoryId];
                $randomCount = rand(1, 3);

                for ($j = 1; $j <= $randomCount; $j++) {
                    $randomImageIndex = array_rand($images);
                    $randomImage = $images[$randomImageIndex];

                    ProductImages::create([
                        'url' => $randomImage,
                        'products_id' => $i,
                    ]);
                }
            }
        }
    }
}
