<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreRobotController extends Controller
{
    public function index()
    {
        $store = Store::first();
        if (!$store) return response()->json([
            'message' => 'Store not found.'
        ], 404);

        $robots = Robot::first();
        if (!$robots) $robots = Robot::create([
            'path' => 'robots.txt',
            // allow all robots by default
            'content' => 'User-agent: *' . PHP_EOL . 'Disallow: ',
            'filename' => 'robots.txt',
            'link' => 'https://' . $store->host . '/robots.txt'
        ]);

        return response()->json([
            'message' => 'Successfully retrieved robots.',
            'robots' => $robots
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'path' => 'string|nullable',
            'content' => 'required',
            'filename' => 'required',
            'link' => 'string|nullable'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors' => $validator->errors()
            ], 422);
        }

        $store = Store::first();
        if (!$store) return response()->json([
            'message' => 'Store not found.'
        ], 404);

        $robots = Robot::first();
        if (!$robots) $robots = Robot::create();

        $robots->path = $request->path;
        $robots->content = $request->content;
        $robots->filename = $request->filename;
        $robots->link = 'https://' . $store->host . '/robots.txt';
        $robots->save();

        return response()->json([
            'message' => 'Successfully updated robots.',
            'robots' => $robots
        ]);
    }
}
