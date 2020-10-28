<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'localization', 'prefix' => Session::get('locale')], function() {
    Route::get('language/{language}', 'LangController@getlang');

    Route::get('/', 'MainController@index');
    Route::get('home', 'MainController@index');
    Route::get('partner', 'MainController@project');
    Route::get('news', 'BlogController@index');
    route::get('search','BlogController@search');
    Route::get('news/view/{id}/{slung}', 'BlogController@show');
    route::get('tag','BlogController@tag');
    Route::get('business-systems','MainController@business');
    Route::get('net-systems-development','MainController@net');
    Route::get('developer','MainController@developer');
    Route::get('java-systems-development','MainController@java');
    Route::get('website-development','MainController@websiteDevelopment');
    Route::get('smartphone-application-development', function() {
      if (Session::get('locale') == 'en') {
        return view('landing.en-mobile');
      }
      if (Session::get('locale') == 'vi') {
        return view('landing.en-mobile');
      }
      return view('landing.jp-mobile');
    });
    Route::get('online-seminar', function() {
      if (Session::get('locale') == 'en') {
        return view('online-seminar.en-seminar');
      }
      if (Session::get('locale') == 'vi') {
        return view('online-seminar.vn-seminar');
      }
      return view('online-seminar.jp-seminar');
    });
    Route::get('outsourcing-angular-development', function() {
      if (Session::get('locale') == 'en' || Session::get('locale') == 'vi') {
        return view('landing.en-angular');
      }
      return view('landing.jp-angular');
    });
    route::get('/faq', function() {
        return view('faq');
    });
    Route::get('/contact', function() {
        return view('contact');
    });
    Route::get('/admin', function() {
        return view('layouts.admin');
    });

    Route::get('/signup', function() {
        return view('signup');
    });
});
    Route::group(
        [
            'prefix' => 'api'
        ]
        ,function () {
            
            Route::prefix('admin')->namespace('Admin')->group(function() {
                Route::post('login', 'AuthController@login');
                Route::get('account', 'AuthController@account');
                Route::post('refresh', 'AuthController@refresh');
                Route::post('logout', 'AuthController@logout'); 
            });
            Route::prefix('blog')->namespace('Admin')->group(function() {
                Route::get('index', 'BlogController@index');
                Route::post('store', 'BlogController@store');
                Route::post('edit', 'BlogController@edit');
                Route::post('update', 'BlogController@update');
                Route::post('delete', 'BlogController@delete');
                Route::post('update_status', 'BlogController@update_status');
            });
            Route::prefix('category-project')->namespace('Admin')->group(function() {
                Route::get('index', 'CategoryProjectController@index');
                Route::post('store', 'CategoryProjectController@store');
                Route::post('edit', 'CategoryProjectController@edit');
                Route::post('update', 'CategoryProjectController@update');
                Route::post('delete', 'CategoryProjectController@delete');
                Route::post('update_status', 'CategoryProjectController@update_status');
            });
            Route::prefix('project')->namespace('Admin')->group(function() {
                Route::get('index', 'ProjectController@index');
                Route::post('store', 'ProjectController@store');
                Route::post('edit', 'ProjectController@edit');
                Route::post('update', 'ProjectController@update');
                Route::post('delete', 'ProjectController@delete');
                Route::post('update_status', 'ProjectController@update_status');
            });
            // Route::prefix('product')->namespace('Admin')->group(function() {
            //     Route::post('add', 'ProductController@add');
            //     Route::get('get/{id?}', 'ProductController@get');
            //     Route::post('edit', 'ProductController@edit');
            //     Route::delete('delete/{id}', 'ProductController@delete');
            // });
            
            // Route::prefix('category')->namespace('Admin')->group(function() {
            //     Route::get('get/{id?}', 'CategoryController@get');
            //     Route::post('edit', 'CategoryController@edit');
            //     Route::delete('delete/{id}', 'CategoryController@delete');
            // });
            
            // Route::prefix('order')->namespace('Admin')->group(function() {
            //     Route::get('get', 'OrderController@get');
            // });
            
            // Route::prefix('langs')->namespace('Admin')->group(function() {
            //     Route::get('get', 'LangsController@get');
            //     Route::put('update', 'LangsController@update');
            // });
            Route::prefix('settings')->namespace('Admin')->group(function() {
                Route::get('index', 'SettingController@index');
                Route::post('addSetting', 'SettingController@store');
                Route::post('edit', 'SettingController@edit');
                Route::post('update', 'SettingController@update');
                Route::post('delete', 'SettingController@delete');
            });
        });