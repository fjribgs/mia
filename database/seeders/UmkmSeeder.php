<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Umkm;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkms = [
            [
                'user_id' => 1,
                'province_id' => 1,
                'city_id' => 1,
                'district_id' => 1,
                'village_id' => 1,
                'description' => 'admin account',
                'type' => 'tetap',
                'gmaps_link' => 'https://www.google.com/maps',
                'address' => 'disini',
                'phone_number' => '082121345678',
                'open_days' => 'Setiap Hari',
                'open_time' => '07.00',
                'close_time' => '20.00',
            ],
        ];

        foreach($umkms as $umkm) {
            Umkm::create($umkm);
        }
    }
}
