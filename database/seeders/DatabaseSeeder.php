<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Check if the user already exists
        $user = User::where('email', 'test@example.com')->first();

        if (!$user) {
            User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('your_password'),
                // add other fields as necessary
            ]);
        }
    }
}

