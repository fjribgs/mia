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
                'username' => 'admin123',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ],
        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
