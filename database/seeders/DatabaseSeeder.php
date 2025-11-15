<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call('laravolt:indonesia:seed');
        $this->call([
            UserSeeder::class,
            UmkmSeeder::class,
            CategorySeeder::class,
            UmkmCategorySeeder::class,
            PromoSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
