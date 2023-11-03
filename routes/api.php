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
        Route::get('', 'CustomerController@index');
        Route::post('create', 'CustomerController@store');

        Route::group(['prefix' => 'companies'], function () {
            Route::get('', 'CompanyController@index');
            Route::get('{slug}', 'CompanyController@show');
            Route::post('create', 'CompanyController@store');
        });
    });

    Route::group(['prefix' => 'stores'], function () {
        Route::get('{slug}', 'StoreController@show');
        Route::post('create', 'StoreController@store');
        Route::post('upload', 'StoreController@upload');

        // editing store theme
        Route::get('{slug}/theme', 'ThemeController@show');

        Route::group(['prefix' => 'theme'], function () {
            Route::get('', 'ThemeController@index');
            Route::get('{slug}/components', 'ThemeController@components');

            Route::group(['prefix' => 'components'], function () {
                Route::group(['prefix' => 'announcement-bar'], function () {
                    Route::get('{id}', 'AnnouncementBarController@show');
                    Route::post('update', 'AnnouncementBarController@update');

                    Route::get('{id}/announcement-block', 'AnnouncementBlockController@show');
                    Route::group(['prefix' => 'announcement-block'], function () {
                        Route::post('create', 'AnnouncementBlockController@store');
                        Route::post('update', 'AnnouncementBlockController@update');
                        Route::post('delete', 'AnnouncementBlockController@destroy');
                    });
                });
            });
        });
    });
});