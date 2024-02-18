<?php

namespace App\Console\Commands;

use App\Models\Category;
use App\Models\GoogleProductCategory;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class ImportGoogleCategories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:google-categories';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import Google product categories from Google\'s taxonomy file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // 1 - Animals & Pet Supplies
        // 3237 - Animals & Pet Supplies > Live Animals
        // 2 - Animals & Pet Supplies > Pet Supplies
        // 3 - Animals & Pet Supplies > Pet Supplies > Bird Supplies
        // 7385 - Animals & Pet Supplies > Pet Supplies > Bird Supplies > Bird Cage Accessories
        // 499954 - Animals & Pet Supplies > Pet Supplies > Bird Supplies > Bird Cage Accessories > Bird Cage Bird Baths
        // 7386 - Animals & Pet Supplies > Pet Supplies > Bird Supplies > Bird Cage Accessories > Bird Cage Food & Water Dishes

        GoogleProductCategory::truncate();

        $fileContent = file_get_contents(public_path('resources/txt/taxonomy-with-ids.en-US.txt'));

        foreach (explode("\n", $fileContent) as $line) {
            $parts = explode(' - ', $line);
            $id = trim($parts[0]);
            $categories = [];

            if (isset($parts[1])) {
                $separator = ' > ';
                $levels = explode($separator, $parts[1]);
                
                foreach ($levels as $level) {
                    $categories[] = trim($level);
                }

                // remove duplicates by category name
                // $categories = array_unique($categories);

                $this->createCategories($id, $categories);
            }

            // $this->info("id: $id, categories: " . implode(', ', $categories));
        }
    }

    private function createCategories($id, $categories)
    {
        $parentId = null;

        foreach ($categories as $categoryName) {
            $data = [
                'name' => $categoryName,
                'slug' => Str::slug($categoryName),
                'parent_id' => $parentId,
                'googleShoppingID' => $id,
                'googleShoppingName' => implode(' > ', $categories),
            ];

            $category = GoogleProductCategory::where('name', $categoryName)->first();

            if (!$category) {
                $category = GoogleProductCategory::create($data);
                $parentId = $category->id;
                $this->info(json_encode($category));
            } else {
                $parentId = $category->id;
            }
        }
    }
}
