<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promo;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promos = [
            [
                'umkm_id' => 1,
                'type' => 'Diskon',
                'name' => 'Diskon Akhir Tahun',
                'description' => null,
                'start_date' => '2025-10-26',
                'end_date' => '2025-10-30',
                'discount_percent' => 50,
                'status' => 'Akan Dimulai',
            ],
        ];

        foreach($promos as $promo) {
            Promo::create($promo);
        }
    }
}
