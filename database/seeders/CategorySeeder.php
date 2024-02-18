<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Artisan;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // run the ImportGoogleCategories command
        $this->command->info('Seeding Google Product Categories');

        // call the import:google-categories artisan command
        Artisan::call('import:google-categories');
    }
}
