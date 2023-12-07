<?php

namespace Database\Seeders;

use App\Models\Theme;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create([
            'name' => 'Default Theme',
            'directory' => 'default',
            'author' => 'Mpowerpromo',
            'author_url' => 'https://mpowerpromo.com',
            'description' => 'This is the default theme for the Mpower Ecommerce Platform',
            'screenshot' => '/resources/views/themes/default/screenshot.png',
            'preview_url' => 'https://mpowerpromo.com',
            'download_url' => 'https://mpowerpromo.com',
            'price' => 0.00,
            'currency' => 'USD',
            'status' => 'active',
            'is_default' => true,
            'license' => 'regular',
            'license_key' => 'default-theme',
            'license_type' => 'single',
            'license_expires_at' => '2023-10-20 00:00:00',
            'license_validity' => 'lifetime',
            'license_activation' => 'activated',
        ]);

        Theme::create([
            'name' => 'Wokiee Ecommerce Theme',
            'directory' => 'wokiee',
            'author' => 'Wokiee',
            'author_url' => 'https://themeforest.net/user/softali',
            'description' => 'Wokiee - Responsive HTML5 Template',
            'assets' => json_encode([
                '/themes/wokiee/css/style.css',
                '/themes/wokiee/js/bundle.js',
            ]),
            'screenshot' => '/resources/views/themes/wokiee/screenshot.png',
            'preview_url' => 'https://themeforest.net/item/wokiee-ecommerce-html-template/full_screen_preview/22564267?_ga=2.79076372.127692638.1699449116-475238651.1649154673',
            'download_url' => 'https://themeforest.net/item/wokiee-ecommerce-html-template/22564267',
            'price' => 19.00,
            'currency' => 'USD',
            'status' => 'active',
            'is_default' => false,
            'license' => 'regular',
            'license_key' => 'wokiee-theme',
            'license_type' => 'single',
            'license_expires_at' => '2023-10-20 00:00:00',
            'license_validity' => 'lifetime',
            'license_activation' => 'activated',
        ]);
    }
}
