<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementBar;
use App\Models\AnnouncementBlock;
use Illuminate\Http\Request;

class AnnouncementBlockController extends Controller
{
    public function store(Request $request)
    {
        $component = AnnouncementBar::find($request->component_id);

        if (!$component) {
            return response()->json([
                'message' => 'Component not found'
            ], 404);
        }

        $announcement_block = $component->blocks()->create([
            'text' => $request->text,
            'link' => $request->link,
            'position' => $request->position,
        ]);

        return response()->json([
            'message' => 'Successfully created announcement block',
            'announcement_block' => $announcement_block
        ], 201);
    }

    public function update(Request $request)
    {
        $component = AnnouncementBar::find($request->component_id);

        if (!$component) {
            return response()->json([
                'message' => 'Component not found'
            ], 404);
        }

        $announcement_block = $component->blocks()->where('id', $request->block_id)->first();

        if (!$announcement_block) {
            return response()->json([
                'message' => 'Announcement block not found'
            ], 404);
        }

        // position is optional
        $announcement_block->text = $request->text;
        $announcement_block->link = $request->link;

        if ($request->position) {
            $announcement_block->position = $request->position;
        }

        $announcement_block->save();

        return response()->json([
            'message' => 'Successfully updated announcement block',
            'announcement_block' => $announcement_block
        ], 200);
    }

    public function destroy(Request $request)
    {
        $component = AnnouncementBar::find($request->component_id);

        if (!$component) {
            return response()->json([
                'message' => 'Component not found'
            ], 404);
        }

        $announcement_block = $component->blocks()->where('id', $request->block_id)->first();

        if (!$announcement_block) {
            return response()->json([
                'message' => 'Announcement block not found'
            ], 404);
        }

        $announcement_block->delete();

        return response()->json([
            'message' => 'Successfully deleted announcement block'
        ], 200);
    }
}
