<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Seeding Themes');
        $this->call(ThemeSeeder::class);

        $this->command->info('Seeding Users');
        $this->call(UserSeeder::class);
    }
}
