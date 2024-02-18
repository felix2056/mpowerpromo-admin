<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// authentication routes
Route::post('/login', 'AuthController@login');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::group(['prefix' => 'customers'], function () {
        Route::get('', 'CustomerController@index')->name('customers.index');
        Route::post('create', 'CustomerController@store')->name('customers.store');

        Route::group(['prefix' => 'companies'], function () {
            Route::get('', 'CompanyController@index')->name('customers.companies.index');
            Route::get('single/{slug}', 'CompanyController@show')->name('customers.companies.show');
            Route::post('create', 'CompanyController@store')->name('customers.companies.store');
        });
    });

    Route::group(['prefix' => 'stores'], function () {
        Route::get('', 'StoreController@index')->name('stores.index');
        Route::get('single/{host}', 'StoreController@show')->name('stores.show');
        Route::post('create', 'StoreController@store')->name('stores.store');
        Route::post('upload', 'StoreController@upload')->name('stores.upload');

        Route::group(['middleware' => 'set.tenant.connection'], function () {
            Route::group(['prefix' => 'categories'], function () {
                Route::get('', 'StoreCategoryController@index')->name('stores.categories.index');
                Route::get('{slug}', 'StoreCategoryController@show')->name('stores.categories.show');
                Route::post('create', 'StoreCategoryController@store')->name('stores.categories.store');
            });

            Route::group(['prefix' => 'components'], function () {
                Route::get('', 'StoreComponentController@index')->name('stores.components.index');
                Route::get('{slug}', 'StoreComponentController@show')->name('stores.components.show');
                Route::post('create', 'StoreComponentController@store')->name('stores.components.store');
            });

            Route::group(['prefix' => 'head-tags'], function () {
                Route::get('', 'StoreHeadTagController@index')->name('stores.head-tags.index');
                Route::get('{slug}', 'StoreHeadTagController@show')->name('stores.head-tags.show');
                Route::post('create', 'StoreHeadTagController@store')->name('stores.head-tags.store');
                Route::delete('{tag_type}/{tag_id}', 'StoreHeadTagController@destroy')->name('stores.head-tags.destroy');

                Route::post('meta/create', 'StoreHeadTagController@createMetaTag')->name('stores.head-tags.meta.create');
                Route::post('link/create', 'StoreHeadTagController@createLinkTag')->name('stores.head-tags.link.create');
                Route::post('script/create', 'StoreHeadTagController@createScriptTag')->name('stores.head-tags.script.create');
                Route::post('no-script/create', 'StoreHeadTagController@createNoScriptTag')->name('stores.head-tags.no-script.create');
                Route::post('style/create', 'StoreHeadTagController@createStyleTag')->name('stores.head-tags.style.create');
                Route::post('title/create', 'StoreHeadTagController@createTitleTag')->name('stores.head-tags.title.create');

                Route::post('meta/update', 'StoreHeadTagController@updateMetaTag')->name('stores.head-tags.meta.update');
                Route::post('link/update', 'StoreHeadTagController@updateLinkTag')->name('stores.head-tags.link.update');
                Route::post('script/update', 'StoreHeadTagController@updateScriptTag')->name('stores.head-tags.script.update');
                Route::post('no-script/update', 'StoreHeadTagController@updateNoScriptTag')->name('stores.head-tags.no-script.update');
                Route::post('style/update', 'StoreHeadTagController@updateStyleTag')->name('stores.head-tags.style.update');
                Route::post('title/update', 'StoreHeadTagController@updateTitleTag')->name('stores.head-tags.title.update');
            });

            Route::group(['prefix' => 'media'], function () {
                Route::get('', 'StoreMediaController@index')->name('stores.media.index');
                Route::get('{slug}', 'StoreMediaController@show')->name('stores.media.show');
                Route::post('create', 'StoreMediaController@store')->name('stores.media.store');
            });

            Route::group(['prefix' => 'theme'], function () {
                Route::get('', 'StoreThemeController@index')->name('stores.theme.index');
                Route::match(['get', 'post'], 'body', 'StoreThemeController@bodySetting')->name('stores.theme.body');
                Route::match(['get', 'post'], 'color-system', 'StoreThemeController@colorSystem')->name('stores.theme.color-system');
                Route::match(['get', 'post'], 'options', 'StoreThemeController@optionSetting')->name('stores.theme.options');
                Route::match(['get', 'post'], 'typography', 'StoreThemeController@typographySetting')->name('stores.theme.typography');
            });

            Route::group(['prefix' => 'social-media'], function () {
                Route::get('', 'StoreSocialMediaController@index')->name('stores.social-media.index');
                Route::get('{slug}', 'StoreSocialMediaController@show')->name('stores.social-media.show');
                Route::post('create', 'StoreSocialMediaController@store')->name('stores.social-media.store');
            });

            Route::group(['prefix' => 'robots'], function () {
                Route::get('', 'StoreRobotController@index')->name('stores.robots.index');
                Route::get('{slug}', 'StoreRobotController@show')->name('stores.robots.show');
                Route::post('create', 'StoreRobotController@store')->name('stores.robots.store');
            });

            Route::group(['prefix' => 'sitemap'], function () {
                Route::get('', 'StoreSitemapController@index')->name('stores.sitemap.index');
                Route::get('{slug}', 'StoreSitemapController@show')->name('stores.sitemap.show');
                Route::post('create', 'StoreSitemapController@store')->name('stores.sitemap.store');
            });
        });
    });

    Route::group(['prefix' => 'suppliers'], function () {
        Route::get('', 'SupplierController@index')->name('suppliers.index');
        Route::get('/single/{slug}', 'SupplierController@show')->name('suppliers.show');
        Route::post('create', 'xxxxxxxxxxxxxxxxxx@xxxxx')->name('suppliers.store');

        Route::group(['prefix' => 'endpoints'], function () {
            Route::get('', 'xxxxxxxxxxxxxxxxxxxxxxxxxx@xxxxx')->name('suppliers.endpoints.index');
            Route::get('{slug}', 'xxxxxxxxxxxxxxxxxxxxxxxxxx@xxxx')->name('suppliers.endpoints.show');
            Route::post('create', 'xxxxxxxxxxxxxxxxxxxxxxxxxx@xxxxx')->name('suppliers.endpoints.store');
        });

        Route::group(['prefix' => 'contacts'], function () {
            Route::get('', 'xxxxxxxxxxxxxxxxxxxxxxxxx@xxxxx')->name('suppliers.contacts.index');
            Route::get('{slug}', 'xxxxxxxxxxxxxxxxxxxxxxxxx@xxxx')->name('suppliers.contacts.show');
            Route::post('create', 'xxxxxxxxxxxxxxxxxxxxxxxxx@xxxxx')->name('suppliers.contacts.store');
        });
    });
});