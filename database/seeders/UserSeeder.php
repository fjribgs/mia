<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
                'role' => 'user',
            ],
            [
                'name' => 'PUKA (Pulas Katumbiri)',
                'username' => 'pulaskatumbiri',
                'email' => 'pulaskatumbiri@gmail.com',
                'password' => bcrypt('pulaskatumbiri'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Cafe More (Wyata Guna)',
                'username' => 'cafemore',
                'email' => 'cafemore@gmail.com',
                'password' => bcrypt('cafemore'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Keripik Pak Dedi',
                'username' => 'keripikdedi',
                'email' => 'keripikdedi@gmail.com',
                'password' => bcrypt('keripikdedi'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Keripik Pisang Kusnadi',
                'username' => 'keripikkusnadi',
                'email' => 'keripikkusnadi@gmail.com',
                'password' => bcrypt('keripikkusnadi'),
                'role' => 'umkm',
            ],
            [
                'name' => 'BJ Homemade',
                'username' => 'bjhomemade',
                'email' => 'bjhomemade@gmail.com',
                'password' => bcrypt('bjhomemade'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Nokha (Nopi Herlina)',
                'username' => 'nokha',
                'email' => 'nokha@gmail.com',
                'password' => bcrypt('nokha'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Cafe Cupable',
                'username' => 'cafecupable',
                'email' => 'cafecupable@gmail.com',
                'password' => bcrypt('cafecupable'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Sunyi Coffee',
                'username' => 'sunyicoffee',
                'email' => 'sunyicoffee@gmail.com',
                'password' => bcrypt('sunyicoffee'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Onni House',
                'username' => 'onnihouse',
                'email' => 'onnihouse@gmail.com',
                'password' => bcrypt('onnihouse'),
                'role' => 'umkm',
            ],
            [
                'name' => 'Gallerajid',
                'username' => 'gallerajid',
                'email' => 'gallerajid@gmail.com',
                'password' => bcrypt('gallerajid'),
                'role' => 'umkm',
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
