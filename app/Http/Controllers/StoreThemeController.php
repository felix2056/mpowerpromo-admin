<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Theme;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StoreThemeController extends Controller
{
    public function index()
    {
        // $theme = Theme::with('bodySetting', 'breadcrumbSetting', 'colorSystem', 'componentSetting', 'formSetting', 'linkSetting', 'optionSetting', 'typographySetting')->first();
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        return response()->json([
            'message' => 'Successfully retrieved theme.',
            'theme' => $theme
        ]);
    }

    public function bodySetting()
    {
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $body = $theme->bodySetting()->first();

        return response()->json([
            'message' => 'Successfully retrieved body setting.',
            'body' => $body
        ]);
    }

    public function breadcrumbSetting()
    {
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $breadcrumb = $theme->breadcrumbSetting()->first();

        return response()->json([
            'message' => 'Successfully retrieved breadcrumb setting.',
            'breadcrumb' => $breadcrumb
        ]);
    }

    public function colorSystem(Request $request)
    {
        $store = Store::first();
        if (!$store) return response()->json([
            'message' => 'Store not found.'
        ], 404);

        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $color_system = $theme->colorSystem()->get();

        if ($request->isMethod('post')) {
            $color_name = strtolower($request->name);
            $color_variable = '$' . $color_name;

            $color = $theme->colorSystem()->where('name', $color_name)->first();
            
            // update the bootstrap css file to reflect the changes
            $hash = md5(Str::random(16));
            $scss = file_get_contents(resource_path('js/components/assets/scss/variables.scss'));
            
            // replace the old color variable with the new color variable
            // $primary: #007bff;
            // $secondary:#6c757d;
            // $success:#28a745;
            // $info:#17a2b8;
            // $warning:#ffc107;
            // $danger:#dc3545;
            // $light:#f8f9fa;
            // $dark:#343a40;

            $preg_match_color = '/\$' . $color_name . ':(.*);/';
            preg_match($preg_match_color, $scss, $matches);

            $old_color = $matches[0];
            $new_color = $color_variable . ': ' . $request->value . ';';

            $scss = str_replace($old_color, $new_color, $scss);
            
            $color->value = $request->value;
            $color->save();

            $scss_path = resource_path('js/components/assets/scss/theme.scss');
            $css_path = public_path('css/stores/' . $store->slug);
            $css_compile_path = public_path('css/stores/app.css');
            
            // delete the old SCSS & CSS compile files
            if (file_exists($scss_path)) unlink($scss_path);
            if (file_exists($css_compile_path)) unlink($css_compile_path);
            
            file_put_contents($scss_path, $scss);

            // if the newly SCSS file exists, run the compile-scss npm script
            if (file_exists($scss_path)) {
                // pass the hash to the npm script so that the compiled CSS file can be moved to the public/css/generated folder with a hashed filename
                exec('npm run compile-scss');

                // delete the old CSS file
                if (file_exists($css_path . '/app.css')) unlink($css_path . '/app.css');

                // make the theme folder if it doesn't exist
                if (!file_exists($css_path)) mkdir($css_path, 0777, true);

                // move the compiled CSS file to the public/css/generated folder with a hashed filename
                $filename = 'theme-' . $hash . '.css';
                File::move($css_compile_path, $css_path . '/' . $filename);

                $theme->css_file = $filename;
                $theme->save();

                return response()->json([
                    'message' => 'Successfully updated color system.'
                ]);
            }
        }

        return response()->json([
            'message' => 'Successfully retrieved color system.',
            'color_system' => $color_system
        ]);
    }

    public function componentSetting()
    {
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $component = $theme->componentSetting()->first();

        return response()->json([
            'message' => 'Successfully retrieved component setting.',
            'component' => $component
        ]);
    }

    public function formSetting()
    {
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $form = $theme->formSetting()->first();

        return response()->json([
            'message' => 'Successfully retrieved form setting.',
            'form' => $form
        ]);
    }

    public function linkSetting()
    {
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $link = $theme->linkSetting()->first();

        return response()->json([
            'message' => 'Successfully retrieved link setting.',
            'link' => $link
        ]);
    }

    public function optionSetting()
    {
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $option = $theme->optionSetting()->first();

        return response()->json([
            'message' => 'Successfully retrieved option setting.',
            'option' => $option
        ]);
    }

    public function typographySetting()
    {
        $theme = Theme::first();
        if (!$theme) $theme = Theme::create();

        $typography = $theme->typographySetting()->first();

        return response()->json([
            'message' => 'Successfully retrieved typography setting.',
            'typography' => $typography
        ]);
    }
}
