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
                'umkm_id' => 1,
                'category_id' => 3,
            ],
        ];

        foreach($umkmCategories as $umkmCategory) {
            UmkmCategory::create($umkmCategory);
        }
    }
}
