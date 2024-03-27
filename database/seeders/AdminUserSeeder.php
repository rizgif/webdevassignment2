<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User', // Assuming you have a name column
            'email' => 'aa@aa.aa',
            'password' => Hash::make('P@$$w0rd'), // Hash the password
            'role' => 'admin', // Assuming you have a role column to specify the user role
            'can_login' => true, // Assuming you have these columns based on your earlier schema
            'can_access_transaction' => true,
            'can_access_bucket' => true,
            'can_access_report' => true,
            'is_approved' => true, // Set to true if you need approval before login
            'email_verified_at' => now(), // Assuming email needs to be verified
            'created_at' => now(), // Manually setting created_at
            'updated_at' => now(), // and updated_at timestamps
        ]);
    }
}
