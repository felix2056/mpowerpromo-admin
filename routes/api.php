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
            Route::get('{slug}', 'CompanyController@show')->name('customers.companies.show');
            Route::post('create', 'CompanyController@store')->name('customers.companies.store');
        });
    });

    Route::group(['prefix' => 'stores'], function () {
        Route::get('', 'StoreController@index')->name('stores.index');
        Route::get('{slug}', 'StoreController@show')->name('stores.show');
        Route::post('create', 'StoreController@store')->name('stores.store');
        Route::post('upload', 'StoreController@upload')->name('stores.upload');

        // editing store theme
        Route::get('{slug}/theme', 'ThemeController@show');

        Route::group(['prefix' => 'theme'], function () {
            Route::get('', 'ThemeController@index')->name('stores.theme.index');
            Route::get('{slug}/components', 'ThemeController@components')->name('stores.theme.components');

            Route::group(['prefix' => 'components'], function () {
                Route::group(['prefix' => 'announcement-bar'], function () {
                    Route::get('{id}', 'AnnouncementBarController@show')->name('stores.theme.components.announcement-bar.show');
                    Route::post('update', 'AnnouncementBarController@update')->name('stores.theme.components.announcement-bar.update');

                    Route::get('{id}/announcement-block', 'AnnouncementBlockController@show')->name('stores.theme.components.announcement-bar.announcement-block.show');
                    Route::group(['prefix' => 'announcement-block'], function () {
                        Route::post('create', 'AnnouncementBlockController@store')->name('stores.theme.components.announcement-bar.announcement-block.store');
                        Route::post('update', 'AnnouncementBlockController@update')->name('stores.theme.components.announcement-bar.announcement-block.update');
                        Route::post('delete', 'AnnouncementBlockController@destroy')->name('stores.theme.components.announcement-bar.announcement-block.destroy');
                    });
                });
            });
        });
    });
});