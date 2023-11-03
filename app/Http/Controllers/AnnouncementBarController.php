<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementBar;
use Illuminate\Http\Request;

class AnnouncementBarController extends Controller
{
    public function show($id)
    {
        $announcement_bar = AnnouncementBar::find($id);

        if (!$announcement_bar) {
            return response()->json([
                'message' => 'Announcement bar not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Successfully retrieved announcement bar',
            'announcement_bar' => $announcement_bar
        ], 200);
    }
    
    public function update(Request $request)
    {
        $announcement_bar = AnnouncementBar::find($request->id);

        if (!$announcement_bar) {
            return response()->json([
                'message' => 'Announcement bar not found'
            ], 404);
        }

        $announcement_bar->color_scheme = $request->color_scheme;
        $announcement_bar->show_separator_line = $request->show_separator_line;
        $announcement_bar->show_social_media_icons = $request->show_social_media_icons;
        $announcement_bar->auto_rotate_announcements = $request->auto_rotate_announcements;
        $announcement_bar->auto_rotate_announcements_interval = $request->auto_rotate_announcements_interval;
        $announcement_bar->enable_country_selection = $request->enable_country_selection;
        $announcement_bar->enable_language_selection = $request->enable_language_selection;
        $announcement_bar->facebook = $request->facebook;
        $announcement_bar->instagram = $request->instagram;
        $announcement_bar->youtube = $request->youtube;
        $announcement_bar->tiktok = $request->tiktok;
        $announcement_bar->twitter = $request->twitter;
        $announcement_bar->pinterest = $request->pinterest;
        $announcement_bar->snapchat = $request->snapchat;
        $announcement_bar->tumblr = $request->tumblr;
        $announcement_bar->vimeo = $request->vimeo;
        $announcement_bar->custom_css = $request->custom_css;

        $announcement_bar->save();

        return response()->json([
            'message' => 'Successfully updated announcement bar',
            'announcement_bar' => $announcement_bar
        ], 200);
    }
}
