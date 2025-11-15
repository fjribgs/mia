<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'umkm_id' => 2,
                'category_id' => 1,
                'promo_id' => null,
                'name' => 'Nasi Goreng Spesial',
                'description' => 'Nasi goreng dengan ayam, telur, dan topping istimewa.',
                'price' => 25000,
                'status' => 'Tersedia',
                'is_best_seller' => 1,
                'image' => 'nasi-goreng.jpg',
            ],
            [
                'umkm_id' => 2,
                'category_id' => 2,
                'promo_id' => null,
                'name' => 'Kaos Katun Premium',
                'description' => 'Kaos nyaman dari bahan katun premium.',
                'price' => 80000,
                'status' => 'Habis',
                'is_best_seller' => 0,
                'image' => 'kaos-premium.jpg',
            ],
            [
                'umkm_id' => 3,
                'category_id' => 3,
                'promo_id' => null,
                'name' => 'Tas Anyaman Rotan',
                'description' => 'Tas anyaman rotan buatan tangan dengan kualitas tinggi.',
                'price' => 150000,
                'status' => 'Dihentikan',
                'is_best_seller' => 0,
                'image' => 'tas-anyaman.jpg',
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
