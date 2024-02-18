<?php

namespace App\Http\Controllers;

use App\Models\Sitemap;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreSitemapController extends Controller
{
    public function index()
    {
        $store = Store::first();
        if (!$store) return response()->json([
            'message' => 'Store not found.'
        ], 404);

        $sitemap = Sitemap::first();
        if (!$sitemap) $sitemap = Sitemap::create([
            'path' => 'sitemap.xml',
            'content' => '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL . '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL . '</urlset>',
            'filename' => 'sitemap.xml',
            'link' => 'https://' . $store->host . '/sitemap.xml'
        ]);

        return response()->json([
            'message' => 'Successfully retrieved sitemap.',
            'sitemap' => $sitemap
        ]);
    }

    public function store(Request $request)
    {
        $store = Store::first();
        if (!$store) return response()->json([
            'message' => 'Store not found.'
        ], 404);

        $sitemap = Sitemap::first();
        if (!$sitemap) $sitemap = Sitemap::create();

        $sitemap->path = $request->path;
        $sitemap->content = $request->content;
        $sitemap->filename = $request->filename;
        $sitemap->link = $request->link;
        $sitemap->save();

        return response()->json([
            'message' => 'Successfully updated sitemap.',
            'sitemap' => $sitemap
        ]);
    }
}
