<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Super Admin',
                'email' => 'super@test.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@test.com',
                'password' => Hash::make('password')
            ],
            [
                'name' => 'user',
                'email' => 'user@test.com',
                'password' => Hash::make('password')
            ],
        ];

        // Insert data user ke dalam database
        User::query()->insert($data);

        // Assign role untuk setiap user
        $superAdmin = User::where('email', 'super@test.com')->first();
        $admin = User::where('email', 'admin@test.com')->first();
        $user = User::where('email', 'user@test.com')->first();

        if ($superAdmin) {
            $superAdmin->assignRole('superadmin');
        }

        if ($admin) {
            $admin->assignRole('admin');
        }
        if ($user) {
            $user->assignRole('user');
        }
    }
}
