<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\TemporaryFile;
use App\Models\Theme;
use Illuminate\Http\Request;
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
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $store = Store::create([
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

        // create default theme for store
        $theme = $this->setupTheme($store);

        if (!$theme) {
            return response()->json([
                'message' => 'Failed to create theme'
            ], 500);
        }

        // create default components for theme
        $this->setupComponents($theme);

        return response()->json([
            'message' => 'Successfully created store',
            'store' => $store
        ], 201);
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

    private function setupTheme($store)
    {
        $theme = Theme::where('is_default', true)->first();

        if (!$theme) {
            return false;
        }

        $store_theme = $store->themes()->create([
            'theme_id' => $theme->id,
            'slug' => strrev(md5(time())),
            'is_published' => true,
        ]);

        if (!$store_theme) {
            return false;
        }

        // make api get request to mpowerpromo.local to publish theme assets to store directory, pass the theme slug as a query param
        
        $response = Http::get(env('FRONTEND_URL') . '/publish-theme-assets', [
            'theme_id' => $theme->id,
            'store_id' => $store->id,
        ]);

        if ($response->failed()) {
            return false;
        }
    
        return $store_theme;
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
