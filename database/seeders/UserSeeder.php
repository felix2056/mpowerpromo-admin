<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create a single user
        $user = \App\Models\User::create([
            "role" => "admin",
            "first_name" => "Daniel",
            "last_name" => "Feldman",
            "email" => "danny.feldman@me.com",
            "email_verified_at" => now(),
            "password" => Hash::make("Testonetwothree^"),
            // "remember_token" => \Illuminate\Support\Str::random(10),
            "job_title" => "Software Engineer",
            "website" => "https://danielfeldman.dev",
            "country_code" => "US",
            "phone_number" => "1-555-555-5555",
            "extension" => "123",
            "sales_commission" => 0.05,
            "sales_admin_commission" => 0.05,
            // "avatar" => "https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200",
            // "photo" => "https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200",
            "is_active" => true,
            "is_registered" => true,
            "last_login_at" => now(),
        ]);
    }
}
