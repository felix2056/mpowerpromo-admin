<?php

namespace App\Http\Controllers;

use App\Jobs\ShouldInstallVvveb;
use App\Models\Store;
use App\Models\TemporaryFile;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();

        return response()->json([
            'message' => 'Successfully retrieved stores',
            'stores' => $stores
        ], 200);
    }

    public function show($slug)
    {
        $store = Store::where('slug', $slug)->first();

        if (!$store) {
            return response()->json([
                'message' => 'Store not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Successfully retrieved store',
            'store' => $store
        ], 200);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'logo' => 'nullable|string',
            'domain' => 'required|string',
            'subdomain' => 'required|string',
            'country_code' => 'nullable|string',
            'country_flag' => 'nullable|string',
            'phone_number' => 'nullable|string',
            'extension' => 'nullable|string',
            'redirectUrls' => 'nullable|array',
            'redirectUrls.*' => 'nullable|string',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::find(Auth::user()->id);

        // check if store already exists
        $store = Store::where('subdomain', $request->subdomain)->first();
        if ($store) return response()->json([
            'message' => 'Validation failed',
            'errors' => ['subdomain' => 'This Store subdomain already exists']
        ], 422);

        // check if password is correct
        if (!Hash::check($request->password, $user->password)) return response()->json([
            'message' => 'Validation failed',
            'errors' => ['password' => 'Password is incorrect']
        ], 422);

        $store = $user->stores()->create([
            'name' => $request->name,
            'logo' => $request->logo,
            'domain' => $request->domain,
            'subdomain' => $request->subdomain,
            'slug' => md5(time()), 
            'country_code' => $request->country_code,
            'country_flag' => $request->country_flag,
            'phone_number' => $request->phone_number,
            'extension' => $request->extension,
        ]);

        if (!$store) {
            return response()->json([
                'message' => 'Failed to create store'
            ], 500);
        }

        if ($request->has('redirectUrls')) {
            $redirectUrls = $request->redirectUrls;

            foreach ($redirectUrls as $redirectUrl) {
                $store->redirectUrls()->create([
                    'url' => $redirectUrl,
                ]);
            }
        }

        Artisan::call('queue:work', [
            '--queue' => 'vvveb-install',
            '--stop-when-empty' => true,
        ]);
        
        ShouldInstallVvveb::dispatch($store->id, $user->email, $request->password)->onQueue('vvveb-install');
        
        return response()->json([
            'message' => 'Successfully created store',
            'store' => $store
        ], 201);
        

        // // setup store web files
        // $theme = Theme::where('is_default', true)->first();
        // if (!$theme) return false;

        // $store_theme = $store->themes()->create([
        //     'theme_id' => $theme->id,
        //     'slug' => strrev(md5(time())),
        //     'is_published' => true,
        // ]);

        // if (!$store_theme) return false;
        
        // // create store directory in storage path
        // $storeDirectory = public_path('stores/' . $store->host);
        // if (file_exists($storeDirectory)) return response()->json([
        //     'message' => 'Store directory already exists'
        // ], 500);

        // // copy theme directory to store directory
        // $themeDirectory = public_path('themes/' . $theme->directory);
        // if (!file_exists($themeDirectory)) return response()->json([
        //     'message' => 'Theme directory not found ' . $themeDirectory
        // ], 404);

        // mkdir($storeDirectory, 0777, true);
        // File::copyDirectory($themeDirectory, $storeDirectory);

        // // if copy failed, delete store theme
        // if (!file_exists($storeDirectory)) {
        //     $store->delete();
        //     return response()->json([
        //         'message' => 'Failed to copy theme directory to store directory'
        //     ], 500);
        // }

        // if ($store->logo) {
        //     $logo = $store->logo;
        //     $logo = str_replace(env('APP_URL') . '/temp/', '', $logo);
        //     $logo = storage_path('app/public/temp/' . $logo);

        //     if (file_exists($logo)) {
        //         $logoDestination = $storeDirectory . '/assets/images/logo.png';
        //         copy($logo, $logoDestination);
        //     }
        // }

        // if ($store->favicon) {
        //     $favicon = $store->favicon;
        //     $favicon = str_replace(env('APP_URL') . '/temp/', '', $favicon);
        //     $favicon = storage_path('app/public/temp/' . $favicon);

        //     if (file_exists($favicon)) {
        //         $faviconDestination = $storeDirectory . '/assets/images/favicon.png';
        //         copy($favicon, $faviconDestination);
        //     }
        // }

        // // create store pages
        // $pages = $store->pages()->createMany([
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'home',
        //         'title' => 'Home | ' . $store->name,
        //         'url' => '/',
        //         'file' => 'index.html',
        //         'description' => 'Home page',
        //         'keywords' => 'Home page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'about',
        //         'title' => 'About | ' . $store->name,
        //         'url' => '/about',
        //         'file' => 'about.html',
        //         'description' => 'About page',
        //         'keywords' => 'About page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'contact',
        //         'title' => 'Contact | ' . $store->name,
        //         'url' => '/contact',
        //         'file' => 'contact.html',
        //         'description' => 'Contact page',
        //         'keywords' => 'Contact page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'blog',
        //         'title' => 'Blog | ' . $store->name,
        //         'url' => '/blog',
        //         'file' => 'blog.html',
        //         'description' => 'Blog page',
        //         'keywords' => 'Blog page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'blog-post',
        //         'title' => 'Blog Post | ' . $store->name,
        //         'url' => '/blog-post',
        //         'file' => 'blog-post.html',
        //         'description' => 'Blog Post page',
        //         'keywords' => 'Blog Post page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'shop',
        //         'title' => 'Shop | ' . $store->name,
        //         'url' => '/shop',
        //         'file' => 'shop.html',
        //         'description' => 'Shop page',
        //         'keywords' => 'Shop page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'product',
        //         'title' => 'Product | ' . $store->name,
        //         'url' => '/product',
        //         'file' => 'product.html',
        //         'description' => 'Product page',
        //         'keywords' => 'Product page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'cart',
        //         'title' => 'Cart | ' . $store->name,
        //         'url' => '/cart',
        //         'file' => 'cart.html',
        //         'description' => 'Cart page',
        //         'keywords' => 'Cart page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'checkout',
        //         'title' => 'Checkout | ' . $store->name,
        //         'url' => '/checkout',
        //         'file' => 'checkout.html',
        //         'description' => 'Checkout page',
        //         'keywords' => 'Checkout page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => 'thank-you',
        //         'title' => 'Thank You | ' . $store->name,
        //         'url' => '/thank-you',
        //         'file' => 'thank-you.html',
        //         'description' => 'Thank You page',
        //         'keywords' => 'Thank You page,' . $store->name,
        //     ],
        //     [
        //         'theme_id' => $theme->id,
        //         'name' => '404',
        //         'title' => '404 | ' . $store->name,
        //         'url' => '/404',
        //         'file' => '404.html',
        //         'description' => '404 page',
        //         'keywords' => '404 page,' . $store->name,
        //     ],
        // ]);

        // if (!$pages) return response()->json([
        //     'message' => 'Failed to create pages'
        // ], 500);

        // return response()->json([
        //     'message' => 'Successfully created store',
        //     'store' => $store
        // ], 201);
    }

    public function update(Request $request, $id)
    {
        $store = Store::find($id);

        if (!$store) {
            return response()->json([
                'message' => 'Store not found'
            ], 404);
        }

        $store->update([
            'name' => $request->name,
            'url' => $request->url,
            'country_code' => $request->country_code,
            'country_flag' => $request->country_flag,
            'phone_number' => $request->phone_number,
        ]);

        return response()->json([
            'message' => 'Successfully updated store',
            'store' => $store
        ], 200);
    }

    public function upload(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $path = $request->file('logo')->store('logos', 'temp');

        // if ($request->has('shouldCompress')) {
        //     $shouldCompress = $request->shouldCompress;

        //     if ($shouldCompress) {
        //         $path = $request->file('logo')->store('logos', 'temp');
        //         $path = compress($path);
        //     }
        // }

        if (!$path) {
            return response()->json([
                'message' => 'Failed to upload logo'
            ], 500);
        }

        $temporary_file = TemporaryFile::create([
            'path' => env('APP_URL') . '/temp/' . $path,
            'expires_at' => now()->addHours(24),
        ]);

        return response()->json([
            'message' => 'Successfully uploaded logo',
            'temporary_file' => $temporary_file
        ], 200);
    }

    public function destroy($id)
    {
        $store = Store::find($id);

        if (!$store) {
            return response()->json([
                'message' => 'Store not found'
            ], 404);
        }

        $store->delete();

        return response()->json([
            'message' => 'Successfully deleted store'
        ], 200);
    }

    public function builder($slug)
    {
        $store = Store::with(['pages' => function ($query) {
            $query->where('is_published', true);
        }])->where('slug', $slug)->first();

        if (!$store) {
            return response()->json([
                'message' => 'Store not found'
            ], 404);
        }

        return view('builder', compact('store'));
    }

    private function setupComponents($theme)
    {
        $announcement_bar = $theme->announcementBars()->create([
            'color_scheme' => 'light',
            'show_separator_line' => true,
            'show_social_media_icons' => true,
            'auto_rotate_announcements' => false,
            'auto_rotate_announcements_interval' => 5,
            'enable_country_selection' => false,
            'enable_language_selection' => false,
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'youtube' => 'https://youtube.com',
            'tiktok' => 'https://tiktok.com',
            'twitter' => 'https://twitter.com',
            'pinterest' => 'https://pinterest.com',
            'snapchat' => 'https://snapchat.com',
            'tumblr' => 'https://tumblr.com',
            'vimeo' => 'https://vimeo.com',
            'custom_css' => '',
        ]);

        if ($announcement_bar) {
            $announcement_bar->blocks()->create([
                'text' => 'Welcome to our store'
            ]);

            $announcement_bar->blocks()->create([
                'text' => 'Free shipping on orders over $50',
                'link' => 'https://free-shipping.com'
            ]);
        }
    }
}
