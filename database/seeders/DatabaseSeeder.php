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
        // $this->command->info('Seeding Google Product Categories');
        // $this->call(CategorySeeder::class);
        
        $this->command->info('Seeding Users');
        $this->call(UserSeeder::class);

        $this->command->info('Seeding Suppliers');
        $this->call(SupplierSeeder::class);
    }
}
