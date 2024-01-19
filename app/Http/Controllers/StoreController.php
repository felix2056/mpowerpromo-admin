<?php

namespace App\Http\Controllers;

use App\Jobs\DeployTenant;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\HeadTag;
use App\Models\LinkTag;
use App\Models\Page;
use App\Models\Store;
use App\Models\StoreUrl;
use App\Models\TemporaryFile;
use App\Models\Theme;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Models\Website;

use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;

use Hyn\Tenancy\Environment;

class StoreController extends Controller
{
    public function index()
    {
        $stores = [];

        // get all websites (stores) that belong to the current user
        $user = User::find(Auth::user()->id);
        $websites = $user->websites;

        foreach ($websites as $website) {
            // switch to the website's database
            app(Environment::class)->tenant($website);

            // get all stores
            $websitestores = Store::all();

            foreach ($websitestores as $store) {
                $stores[] = $store;
            }

            // switch back to the central (default) database
            app(Environment::class)->tenant();
        }

        return response()->json([
            'message' => 'Successfully retrieved stores',
            'stores' => $stores
        ], 200);
    }

    public function show($host)
    {
        $user = User::find(Auth::user()->id);
        $website = $user->websites()->where('uuid', $host)->first();

        if (!$website) return response()->json([
            'message' => 'Website not found'
        ], 404);

        // switch to the website's database
        app(Environment::class)->tenant($website);

        // get store
        $subdomain = explode('.', $host)[0];
        $store = Store::where('subdomain', $subdomain)->first();

        if (!$store) return response()->json([
            'message' => 'Store not found'
        ], 404);

        // switch back to the central (default) database
        app(Environment::class)->tenant();

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
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::find(Auth::user()->id);

        // check if password is correct
        if (!Hash::check($request->password, $user->password)) return response()->json([
            'message' => 'Validation failed',
            'errors' => ['password' => 'Password is incorrect']
        ], 422);

        // prevent naming a store with a disallowed subdomain
        $disallowed_subdomains = ['example', 'www', 'app', 'admin', 'administrator', 'root', 'mail', 'webmail', 'email', 'blog', 'support', 'help', 'faq', 'billing', 'client', 'clients', 'contact', 'api', 'cdn', 'dev', 'developer', 'developers', 'devs', 'download', 'downloads', 'forum', 'forums', 'git', 'irc', 'wiki', 'staff', 'store', 'stores', 'shop', 'shopping', 'stage', 'staging', 'status', 'stats', 'static', 'beta', 'test', 'tests', 'blog', 'blogs', 'news', 'chat', 'chatting', 'buy', 'purchase', 'demo', 'download', 'downloads', 'login', 'logins', 'logout', 'logs', 'signup', 'signups', 'signin', 'signins', 'signout', 'signouts', 'subscribe', 'subscribes', 'unsubscribe', 'unsubscribes', 'uploads', 'videos', 'images', 'img', 'assets', 'media', 'files', 'file', 'javascript', 'js', 'css', 'fonts', 'font', 'maps', 'map', 'music', 'sound', 'sounds', 'podcast', 'podcasts', 'podcasting', 'podcastings', 'rss', 'feed', 'feeds', 'sitemap', 'sitemaps', 'xml', 'json', 'txt', 'pdf', 'doc', 'docs', 'docx', 'xls', 'xlsx', 'csv', 'ppt', 'pptx', 'zip', 'rar', 'tar', 'gzip', 'gz', '7z', 'iso', 'exe', 'bin', 'mp3', 'mp4', 'avi', 'mpeg', 'wav', 'mov', 'wmv', 'swf', 'flv', 'apk', 'dmg', 'psd', 'ai', 'eps', 'ps', 'ttf', 'otf', 'woff', 'woff2', 'eot', 'svg', 'svgz', 'ico', 'webp', 'cur', 'tif', 'tiff', 'bmp', 'xcf', 'odt', 'ods', 'odp', 'pages', 'key', 'numbers', '3gp', '3g2', 'asf', 'asx'];
        if (in_array($request->subdomain, $disallowed_subdomains)) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => ['subdomain' => 'This subdomain is not allowed']
            ], 422);
        }

        // check if website and hostname already exists
        $website = Website::where('uuid', $request->subdomain . '.' . $request->domain)->first();
        $hostname = Hostname::where('fqdn', $request->subdomain . '.' . $request->domain)->first();
        if ($website || $hostname) {
            return response()->json([
                'message' => 'Validation failed',
                'errors' => ['subdomain' => 'There is already a store with this subdomain']
            ], 422);
        }

        // create a new website (store) in the system
        $website = new Website();
        $website->uuid = $request->subdomain . '.' . $request->domain;
        $website->managed_by_database_connection = 'system';
        $website->managed_by_user_id = $user->id;
        app(WebsiteRepository::class)->create($website);

        // associate the website with a hostname
        $hostname = new Hostname();
        $hostname->fqdn = $website->uuid;
        $hostname = app(HostnameRepository::class)->create($hostname);
        app(HostnameRepository::class)->attach($hostname, $website);

        // switch to the website's database
        app(Environment::class)->tenant($website);

        // create store
        $store = Store::create([
            'name' => $request->name,
            'logo' => $request->logo,
            'domain' => $request->domain,
            'subdomain' => $request->subdomain,
            'slug' => strrev(md5(time())),
            'country_code' => $request->country_code,
            'country_flag' => $request->country_flag,
            'phone_number' => $request->phone_number,
            'extension' => $request->extension,
        ]);

        if (!$store) {
            // switch back to the central (default) database
            app(Environment::class)->tenant();

            return response()->json([
                'message' => 'Failed to create store'
            ], 500);
        }

        if ($request->has('redirectUrls')) {
            $redirectUrls = $request->redirectUrls;

            foreach ($redirectUrls as $redirectUrl) {
                StoreUrl::create([
                    'url' => $redirectUrl,
                ]);
            }
        }

        // create theme
        $this->createTheme($store);

        // create pages
        $this->createPages();

        // create store category types
        $this->createCategoryTypes();

        // switch back to the central (default) database
        app(Environment::class)->tenant();

        // call artisan command to start the queue worker
        Artisan::call('queue:work', [
            '--queue' => 'deploy-tenant-store',
            '--stop-when-empty' => true,
        ]);
        
        // dispatch the job to deploy the store website to the main domain
        DeployTenant::dispatch($website->uuid, $user->id, $request->password)->onQueue('deploy-tenant-store');

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

    protected function createTheme($store)
    {
        $theme = Theme::create();

        $theme->colorSystem()->createMany([
            [
                'name' => 'Primary',
                'value' => '#007bff',
            ],
            [
                'name' => 'Secondary',
                'value' => '#6c757d',
            ],
            [
                'name' => 'Success',
                'value' => '#28a745',
            ],
            [
                'name' => 'Info',
                'value' => '#17a2b8',
            ],
            [
                'name' => 'Warning',
                'value' => '#ffc107',
            ],
            [
                'name' => 'Danger',
                'value' => '#dc3545',
            ],
            [
                'name' => 'Light',
                'value' => '#f8f9fa',
            ],
            [
                'name' => 'Dark',
                'value' => '#343a40',
            ]
        ]);

        // update the bootstrap css file to reflect the changes
        $hash = md5(Str::random(16));
        $scss = file_get_contents(resource_path('js/components/assets/scss/variables.scss'));

        $scss_path = resource_path('js/components/assets/scss/theme.scss');
        $css_path = public_path('css/stores/' . $store->slug);
        $css_compile_path = public_path('css/stores/app.css');

        if (file_exists($scss_path)) unlink($scss_path);
        if (file_exists($css_compile_path)) unlink($css_compile_path);

        file_put_contents($scss_path, $scss);

        // if the newly SCSS file exists, run the compile-scss npm script
        if (file_exists($scss_path)) {
            exec('npm run compile-scss');

            // make the theme folder if it doesn't exist
            if (!file_exists($css_path)) mkdir($css_path, 0777, true);

            // move the compiled CSS file
            $filename = 'theme-' . $hash . '.css';
            File::move($css_compile_path, $css_path . '/' . $filename);

            $theme->css_file = $filename;
            $theme->save();
        }

        $theme->bodySetting()->create([
            'body_background_color' => '#FFFFFF',
            'body_text_color' => '#000000',
        ]);

        $theme->typographySetting()->create([
            'headings_font_weight' => '500',
        ]);

        $theme->optionSetting()->create([
            'enable_rounded' => true,
            'enable_responsive_font_sizes' => true,
            'enable_shadows' => false,
            'enable_gradients' => false,
        ]);

        $theme->breadcrumbSetting()->create([
            'breadcrumb_padding_x' => '0rem',
            'breadcrumb_background_color' => '#FFFFFF',
        ]);

        $theme->linkSetting()->create([
            'link_decorations' => 'none',
        ]);

        $theme->componentSetting()->create([
            'border_width' => '1px',
            'border_radius' => '.25rem',
            'border_radius_sm' => '.2rem',
            'border_radius_lg' => '.3rem',
        ]);

        $theme->formSetting()->create([
            'button_border_radius' => '.25rem',
            'button_border_radius_sm' => '.2rem',
            'button_border_radius_lg' => '.3rem',
        ]);

        $this->createHeadTags($store, $theme);
    }

    protected function createPages()
    {
        // create multiple pages
        Page::create([
            'navigation_title' => 'About',
            'meta_title' => 'About | ${siteName}',
            'static_routes' => 'custom',
            'slug' => 'about',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Supplier: Global',
            'meta_title' => '${supplierName} ${searchTerm} ${facetPrefix} ${categoryName} Promotional Products ${facetSuffix} ${closeout}',
            'meta_description' => '${supplierName} ${searchTerm} ${facetPrefix} ${categoryName} Promotional Products ${facetSuffix} ${closeout}',
            'static_routes' => 'supplier',
            'slug' => 'supplier',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Authors',
            'meta_title' => 'Authors | ${siteName}',
            'static_routes' => 'authors',
            'slug' => 'authors',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Occasions',
            'meta_title' => 'Occasions | ${siteName}',
            'static_routes' => 'custom',
            'slug' => 'occasions',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Events',
            'meta_title' => 'Events: ${siteName}',
            'static_routes' => 'custom',
            'slug' => 'events',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Industries',
            'meta_title' => 'Industries: ${siteName}',
            'static_routes' => 'custom',
            'slug' => 'industries',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Themes',
            'meta_title' => 'Themes | ${siteName}',
            'static_routes' => 'custom',
            'slug' => 'themes',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Event: (Template)',
            'meta_title' => 'Event Page Template',
            'static_routes' => 'custom',
            'slug' => 'event/template',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Industry: (Template)',
            'meta_title' => 'Industry Page Template',
            'static_routes' => 'custom',
            'slug' => 'industry/template',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Occasion: (Template)',
            'meta_title' => 'Occasion Page Template',
            'static_routes' => 'custom',
            'slug' => 'occasion/template',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Themes: (Template)',
            'meta_title' => 'Themes Page Template',
            'static_routes' => 'custom',
            'slug' => 'themes/template',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Proof Checkout Confirmation',
            'meta_title' => 'Proof Checkout Confirmation',
            'static_routes' => 'proofcheckoutconfirmation',
            'slug' => 'proofcheckoutconfirmation',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Proof Checkout',
            'meta_title' => 'Proof Checkout | ${siteName}',
            'static_routes' => 'proofcheckout',
            'slug' => 'proofcheckout',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Proof Cart',
            'meta_title' => 'Proof Cart | ${siteName}',
            'static_routes' => 'proofcart',
            'slug' => 'proofcart',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Proof Item Added',
            'meta_title' => 'Proof Item Added | ${siteName}',
            'static_routes' => 'proofitemsadded',
            'slug' => 'proofitemsadded',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Quote Checkout Confirmation',
            'meta_title' => 'Quote Checkout Confirmation | ${siteName}',
            'static_routes' => 'quotecheckoutconfirmation',
            'slug' => 'quotecheckoutconfirmation',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Sample Checkout',
            'meta_title' => 'Sample Checkout | ${siteName}',
            'static_routes' => 'samplecheckout',
            'slug' => 'samplecheckout',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Sample Cart',
            'meta_title' => 'Sample Cart | ${siteName}',
            'static_routes' => 'samplecart',
            'slug' => 'samplecart',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Draft',
            'meta_title' => 'Draft',
            'static_routes' => 'custom',
            'slug' => 'draft',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'Contact Confirmation',
            'meta_title' => 'Contact Confirmation | ${siteName}',
            'static_routes' => 'custom',
            'slug' => 'contactconfirmation',
            'is_enabled' => true
        ]);
        Page::create([
            'navigation_title' => 'No Minimum',
            'meta_title' => 'No Minimum | ${siteName}',
            'static_routes' => 'products',
            'slug' => 'products',
            'additional_slug' => 'no-minimum',
            'is_enabled' => true
        ]);
    }

    protected function createCategoryTypes()
    {

        CategoryType::create([
            'name' => 'Blog',
            'description' => 'Blog category type',
            'slug' => 'blog',
        ]);
        CategoryType::create([
            'name' => 'Events',
            'description' => 'Events category type',
            'slug' => 'events',
        ]);
        CategoryType::create([
            'name' => 'Industries',
            'description' => 'Industries category type',
            'slug' => 'industries',
        ]);
        CategoryType::create([
            'name' => 'Knowledge Base',
            'description' => 'Knowledge Base category type',
            'slug' => 'knowledge-base',
        ]);
        CategoryType::create([
            'name' => 'Occasions',
            'description' => 'Occasions category type',
            'slug' => 'occasions',
        ]);
        CategoryType::create([
            'name' => 'Products',
            'description' => 'Products category type',
            'slug' => 'products',
        ]);
        CategoryType::create([
            'name' => 'Templates',
            'description' => 'Templates category type',
            'slug' => 'templates',
        ]);
        CategoryType::create([
            'name' => 'Themes',
            'description' => 'Themes category type',
            'slug' => 'themes',
        ]);
    }

    protected function createHeadTags($store, $theme)
    {
        $head_tag = HeadTag::create();

        $head_tag->metaTags()->createMany([
            [
                'name' => 'content-language',
                'content' => 'en-us',
                'description' => 'content-language',
                'hid' => 'content-language',
            ]
        ]);

        $head_tag->linkTags()->createMany([
            [
                'href' => 'https://fa.mpowerpromo.com/css/all.css',
                'rel' => 'stylesheet',
                'description' => 'fontawesome.all.css',
                'type' => 'is_external',
            ],
            [
                'href' => 'https://store-media.mpowerpromo.com/5e4ef2d67141a025da688296/assets/1591297900931.ico',
                'rel' => 'icon',
                'description' => 'favicon.io',
                'type' => 'is_external',
            ],
            [
                'href' => config('app.url') . '/css/stores/' . $store->slug . '/' . $theme->css_file,
                'rel' => 'stylesheet',
                'description' => 'Bootstrap Theme',
            ]
        ]);
    }
}
