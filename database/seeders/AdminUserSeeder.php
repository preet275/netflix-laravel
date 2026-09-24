<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Create the admin user.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@netflix.com',
            'password' => Hash::make('Admin@12345'),
        ]);
    }
}