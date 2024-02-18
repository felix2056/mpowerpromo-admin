<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreSocialMediaController extends Controller
{
    public function index()
    {
        $social_media = SocialMedia::first();
        if (!$social_media) $social_media = SocialMedia::create();

        return response()->json([
            'message' => 'Successfully retrieved social media.',
            'social_media' => $social_media
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'show' => 'required',
            'networks' => 'required|array',
            'is_rounded' => 'required',
            'has_labels' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $validator->errors()
            ], 422);
        }

        $social_media = SocialMedia::first();
        if (!$social_media) $social_media = SocialMedia::create();

        $social_media->show = (boolean) $request->show;
        $social_media->networks = $request->networks;
        $social_media->is_rounded = (boolean) $request->is_rounded;
        $social_media->has_labels = (boolean) $request->has_labels;
        $social_media->save();

        return response()->json([
            'message' => 'Successfully updated social media.',
            'social_media' => $social_media
        ]);
    }
}
