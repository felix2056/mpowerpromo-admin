<?php

namespace App\Console\Commands;

use App\Models\Category;
use Illuminate\Console\Command;

class SeedGoogleCategories extends Command
{
    protected $signature = 'seed:google-categories';

    protected $description = 'Seed Google product categories from Google\'s taxonomy file';

    public function handle()
    {
        // Path to the taxonomy file
        $taxonomyFile = public_path('resources/txt/taxonomy-with-ids.en-US.txt');

        // Read the file line by line
        $lines = file($taxonomyFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        foreach ($lines as $line) {
            // Parse each line to extract category information
            $parts = explode(' - ', $line);
            $categoryId = intval($parts[0]);
            $categoryName = trim($parts[1]);
            $parentCategory = null;

            // If there is a parent category, extract its ID and name
            if (isset($parts[2])) {
                $parentInfo = explode(' > ', $parts[2]);
                $parentCategory = Category::where('name', trim(end($parentInfo)))->first();
            }

            // log the category information
            $this->info("ID: $categoryId, Name: $categoryName, Parent: " . ($parentCategory ? $parentCategory->name : 'None'));

            // Insert the category into the database
            // Category::create([
            //     'id' => $categoryId,
            //     'name' => $categoryName,
            //     'slug' => str_slug($categoryName),
            //     'parent_id' => $parentCategory ? $parentCategory->id : null,
            //     'googleShoppingID' => $categoryId,
            //     'googleShoppingName' => $line,
            // ]);
        }

        $this->info('Google categories seeded successfully!');
    }
}
