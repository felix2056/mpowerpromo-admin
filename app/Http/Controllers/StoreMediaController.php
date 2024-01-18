<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class StoreMediaController extends Controller
{
    public function index()
    {
        $media = Media::all();

        return response()->json([
            'message' => 'Successfully retrieved media.',
            'media' => $media
        ]);
    }
}
