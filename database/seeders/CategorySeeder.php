<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'category_name' => 'Makanan dan Minuman',
            ],
            [
                'category_name' => 'Pakaian'
            ],
            [
                'category_name' => 'Kerajinan'
            ],
        ];

        foreach($categories as $category) {
            Category::create($category);
        }
    }
}
