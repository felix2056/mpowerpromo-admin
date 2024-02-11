<?php

namespace App\Http\Controllers;

use App\Models\HeadTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StoreHeadTagController extends Controller
{
    public function index()
    {
        $head_tag = HeadTag::with('metaTags', 'linkTags', 'scriptTags', 'noScriptTags', 'styleTags', 'titleTags')->first();
        if (!$head_tag) $head_tag = HeadTag::create();

        return response()->json([
            'message' => 'Successfully retrieved head tag.',
            'head_tag' => $head_tag
        ]);
    }

    public function createMetaTag(Request $request)
    {
        $head_tag = HeadTag::first();
        if (!$head_tag) $head_tag = HeadTag::create();

        $meta_tag = $head_tag->metaTags()->create($request->all());

        return response()->json([
            'message' => 'Successfully created meta tag.',
            'meta_tag' => $meta_tag
        ]);
    }

    public function createLinkTag(Request $request)
    {
        $head_tag = HeadTag::first();
        if (!$head_tag) $head_tag = HeadTag::create();

        $link_tag = $head_tag->linkTags()->create($request->all());

        return response()->json([
            'message' => 'Successfully created link tag.',
            'link_tag' => $link_tag
        ]);
    }

    public function createScriptTag(Request $request)
    {
        $head_tag = HeadTag::first();
        if (!$head_tag) $head_tag = HeadTag::create();

        $script_tag = $head_tag->scriptTags()->create($request->all());

        return response()->json([
            'message' => 'Successfully created script tag.',
            'script_tag' => $script_tag
        ]);
    }

    public function createNoScriptTag(Request $request)
    {
        $head_tag = HeadTag::first();
        if (!$head_tag) $head_tag = HeadTag::create();

        $no_script_tag = $head_tag->noScriptTags()->create($request->all());

        return response()->json([
            'message' => 'Successfully created no script tag.',
            'no_script_tag' => $no_script_tag
        ]);
    }

    public function createStyleTag(Request $request)
    {
        $head_tag = HeadTag::first();
        if (!$head_tag) $head_tag = HeadTag::create();

        $style_tag = $head_tag->styleTags()->create($request->all());

        return response()->json([
            'message' => 'Successfully created style tag.',
            'style_tag' => $style_tag
        ]);
    }

    public function createTitleTag(Request $request)
    {
        $head_tag = HeadTag::first();
        if (!$head_tag) $head_tag = HeadTag::create();

        $title_tag = $head_tag->titleTags()->create($request->all());

        return response()->json([
            'message' => 'Successfully created title tag.',
            'title_tag' => $title_tag
        ]);
    }

    public function updateMetaTag(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tag_type' => 'required|string',
            'id' => 'required|integer',
            'hid' => 'string',
            'name' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'property' => 'string',
            'http_equiv' => 'string'
        ]);

        if ($validator->fails()) return response()->json([
            'message' => 'Validation failed.',
            'errors' => $validator->errors()
        ], 422);

        $head_tag = HeadTag::first();
        if (!$head_tag) return response()->json([
            'message' => 'Head tag not found.'
        ], 404);

        $meta_tag = $head_tag->metaTags()->find($request->id);
        if (!$meta_tag) return response()->json([
            'message' => 'Meta tag not found.'
        ], 404);

        unset($request['tag_type']);
        $meta_tag->update($request->all());

        return response()->json([
            'message' => 'Successfully updated meta tag.',
            'meta_tag' => $meta_tag
        ]);
    }

    public function updateLinkTag(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tag_type' => 'required|string',
            'id' => 'required|integer',
            'rel' => 'required|string',
            'href' => 'string',
            'content' => 'string',
            'description' => 'required|string',
            'is_external' => 'boolean',
            'is_inline' => 'boolean',
            'is_boostrap' => 'boolean'
        ]);

        if ($validator->fails()) return response()->json([
            'message' => 'Validation failed.',
            'errors' => $validator->errors()
        ], 422);

        $head_tag = HeadTag::first();
        if (!$head_tag) return response()->json([
            'message' => 'Head tag not found.'
        ], 404);

        $link_tag = $head_tag->linkTags()->find($request->id);
        if (!$link_tag) return response()->json([
            'message' => 'Link tag not found.'
        ], 404);
        
        unset($request['tag_type']);
        $link_tag->update($request->all());

        return response()->json([
            'message' => 'Successfully updated link tag.',
            'link_tag' => $link_tag
        ]);
    }

    public function destroy($tag_type, $tag_id)
    {
        $head_tag = HeadTag::first();
        if (!$head_tag) $head_tag = HeadTag::create();

        switch ($tag_type) {
            case 'meta':
                $meta_tag = $head_tag->metaTags()->find($tag_id);
                if (!$meta_tag) return response()->json([
                    'message' => 'Meta tag not found.'
                ], 404);
                $meta_tag->delete();
                break;
            case 'link':
                $link_tag = $head_tag->linkTags()->find($tag_id);
                if (!$link_tag) return response()->json([
                    'message' => 'Link tag not found.'
                ], 404);
                $link_tag->delete();
                break;
            case 'script':
                $script_tag = $head_tag->scriptTags()->find($tag_id);
                if (!$script_tag) return response()->json([
                    'message' => 'Script tag not found.'
                ], 404);
                $script_tag->delete();
                break;
            case 'noscript':
                $no_script_tag = $head_tag->noScriptTags()->find($tag_id);
                if (!$no_script_tag) return response()->json([
                    'message' => 'No script tag not found.'
                ], 404);
                $no_script_tag->delete();
                break;
            case 'style':
                $style_tag = $head_tag->styleTags()->find($tag_id);
                if (!$style_tag) return response()->json([
                    'message' => 'Style tag not found.'
                ], 404);
                $style_tag->delete();
                break;
            case 'title':
                $title_tag = $head_tag->titleTags()->find($tag_id);
                if (!$title_tag) return response()->json([
                    'message' => 'Title tag not found.'
                ], 404);
                $title_tag->delete();
                break;
            default:
                return response()->json([
                    'message' => 'Tag type not found.'
                ], 404);
        }

        return response()->json([
            'message' => 'Successfully deleted tag.'
        ]);
    }
}
