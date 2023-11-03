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
            'name' => 'Molla Ecommerce Theme',
            'directory' => 'molla',
            'author' => 'Porto',
            'author_url' => 'https://themeforest.net/user/portotheme',
            'description' => 'Molla is an ultimate WooCommerce HTML theme that is suitable for any type of ecommerce business sites. Molla provides plenty elements and powerful features that can configure all you want. Compared to other multi-purpose themes’ general ecommerce features, Molla provides ultimate WooCommerce features with exclusive skins & layouts and features. Molla guarantees super fast performance which is essential for your WooCommerce shops. Please check below to see more features from Molla. Enjoy Molla Business & WooCommerce Theme!',
            'screenshot' => '/resources/views/themes/molla/screenshot.png',
            'preview_url' => 'https://molla-ecommerce.netlify.app/',
            'download_url' => 'https://themeforest.net/item/molla-multipurpose-woocommerce-theme/28487727',
            'price' => 59.00,
            'currency' => 'USD',
            'status' => 'active',
            'is_default' => true,
            'license' => 'regular',
            'license_key' => 'molla-ecommerce',
            'license_type' => 'single',
            'license_expires_at' => '2023-10-20 00:00:00',
            'license_validity' => 'lifetime',
            'license_activation' => 'activated',
        ]);

        Theme::create([
            'name' => 'Furnitica Ecommerce Theme',
            'directory' => 'furnitica',
            'author' => 'Porto',
            'author_url' => 'https://themeforest.net/user/portotheme',
            'description' => 'Porto eCommerce is an ultimate ecommerce HTML template. It has all the required tools and features to create a super fast responsive ecommerce with amazing UI and UX experience. 20+ demo layouts and modern design based skins allow you to create your own niche store. You can avoid expensive web development and minimize your design costs using Porto eCommerce HTML template.',
            'screenshot' => '/resources/views/themes/porto/screenshot.png',
            'preview_url' => 'https://preview.portotheme.com/html/porto_ecommerce/demo1/',
            'download_url' => 'https://themeforest.net/item/porto-ecommerce-html-template/30188595',
            'price' => 19.00,
            'currency' => 'USD',
            'status' => 'active',
            'license' => 'regular',
            'license_key' => 'porto-ecommerce',
            'license_type' => 'single',
            'license_expires_at' => '2023-10-20 00:00:00',
            'license_validity' => 'lifetime',
            'license_activation' => 'activated',
        ]);

        Theme::create([
            'name' => 'Biolife',
            'directory' => 'biolife',
            'author' => 'Porto',
            'author_url' => 'https://themeforest.net/user/portotheme',
            'description' => 'Porto eCommerce is an ultimate ecommerce HTML template. It has all the required tools and features to create a super fast responsive ecommerce with amazing UI and UX experience. 20+ demo layouts and modern design based skins allow you to create your own niche store. You can avoid expensive web development and minimize your design costs using Porto eCommerce HTML template.',
            'screenshot' => '/resources/views/themes/porto/screenshot.png',
            'preview_url' => 'https://preview.portotheme.com/html/porto_ecommerce/demo1/',
            'download_url' => 'https://themeforest.net/item/porto-ecommerce-html-template/30188595',
            'price' => 19.00,
            'currency' => 'USD',
            'status' => 'active',
            'license' => 'regular',
            'license_key' => 'porto-ecommerce',
            'license_type' => 'single',
            'license_expires_at' => '2023-10-20 00:00:00',
            'license_validity' => 'lifetime',
            'license_activation' => 'activated',
        ]);

        Theme::create([
            'name' => 'Christ Christmas',
            'directory' => 'christ-christmas',
            'author' => 'Porto',
            'author_url' => 'https://themeforest.net/user/portotheme',
            'description' => 'Porto eCommerce is an ultimate ecommerce HTML template. It has all the required tools and features to create a super fast responsive ecommerce with amazing UI and UX experience. 20+ demo layouts and modern design based skins allow you to create your own niche store. You can avoid expensive web development and minimize your design costs using Porto eCommerce HTML template.',
            'screenshot' => '/resources/views/themes/porto/screenshot.png',
            'preview_url' => 'https://preview.portotheme.com/html/porto_ecommerce/demo1/',
            'download_url' => 'https://themeforest.net/item/porto-ecommerce-html-template/30188595',
            'price' => 19.00,
            'currency' => 'USD',
            'status' => 'active',
            'license' => 'regular',
            'license_key' => 'porto-ecommerce',
            'license_type' => 'single',
            'license_expires_at' => '2023-10-20 00:00:00',
            'license_validity' => 'lifetime',
            'license_activation' => 'activated',
        ]);

        Theme::create([
            'name' => 'Uren',
            'directory' => 'uren',
            'author' => 'Porto',
            'author_url' => 'https://themeforest.net/user/portotheme',
            'description' => 'Porto eCommerce is an ultimate ecommerce HTML template. It has all the required tools and features to create a super fast responsive ecommerce with amazing UI and UX experience. 20+ demo layouts and modern design based skins allow you to create your own niche store. You can avoid expensive web development and minimize your design costs using Porto eCommerce HTML template.',
            'screenshot' => '/resources/views/themes/porto/screenshot.png',
            'preview_url' => 'https://preview.portotheme.com/html/porto_ecommerce/demo1/',
            'download_url' => 'https://themeforest.net/item/porto-ecommerce-html-template/30188595',
            'price' => 19.00,
            'currency' => 'USD',
            'status' => 'active',
            'license' => 'regular',
            'license_key' => 'porto-ecommerce',
            'license_type' => 'single',
            'license_expires_at' => '2023-10-20 00:00:00',
            'license_validity' => 'lifetime',
            'license_activation' => 'activated',
        ]);
    }
}
