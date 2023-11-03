<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use App\Models\StoreTheme;

class ThemeController extends Controller
{
    public function index()
    {
        return view('theme.index');
    }

    public function show(Request $request, $store_slug)
    {
        $store = Store::where('slug', $store_slug)->first();

        if (!$store) {
            return response()->json([
                'message' => 'Store not found'
            ], 404);
        }

        $theme = $store->themes()->where('is_published', true)->first();

        if (!$theme) {
            return response()->json([
                'message' => 'Theme not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Successfully retrieved theme',
            'theme' => $theme
        ], 200);

    }

    public function components(Request $request, $theme)
    {
        $theme = StoreTheme::where('slug', $theme)->first();

        if (!$theme) {
            return response()->json([
                'message' => 'Theme not found'
            ], 404);
        }

        $anouncement_bar = $theme->announcementBars()->with('blocks')->first();

        return response()->json([
            'message' => 'Successfully retrieved theme components',
            'components' => [
                'announcement_bar' => $anouncement_bar
            ]
        ], 200);
    }
}
