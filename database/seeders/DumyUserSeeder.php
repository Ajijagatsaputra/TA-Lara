<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DumyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'username' => 'admin',
                'email' => 'adminti@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
            [
                'username' => 'superadmin',
                'email' => 'superadmin@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'superadmin',
            ],
            [
                'username' => 'alumni',
                'email' => 'alumni@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'alumni',
            ],
        ];

        foreach ($userData as $user)
            User::create([
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => $user['role'],
            ]
        );
    }
}
