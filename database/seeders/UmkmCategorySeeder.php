<?php

namespace Database\Seeders;

use App\Models\UmkmCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmkmCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkmCategories = [
            [
                'umkm_id' => 1,
                'category_id' => 1,
            ],
            [
                'umkm_id' => 3,
                'category_id' => 3,
            ],
            [
                'umkm_id' => 4,
                'category_id' => 1,
            ],
            [
                'umkm_id' => 5,
                'category_id' => 1,
            ],
            [
                'umkm_id' => 6,
                'category_id' => 1,
            ],
            [
                'umkm_id' => 7,
                'category_id' => 3,
            ],
            [
                'umkm_id' => 8,
                'category_id' => 2,
            ],
            [
                'umkm_id' => 9,
                'category_id' => 1,
            ],
            [
                'umkm_id' => 10,
                'category_id' => 1,
            ],
            [
                'umkm_id' => 11,
                'category_id' => 1,
            ],
            [
                'umkm_id' => 12,
                'category_id' => 3,
            ],


        ];

        foreach($umkmCategories as $umkmCategory) {
            UmkmCategory::create($umkmCategory);
        }
    }
}
