<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'checklogin','namespace' => 'Administrator', 'prefix' => 'quanly'], function() {

    Route::get('/', 'HomeController@index')->name('home__admin');
    
    Route::resource('/users', 'UsersController');
    Route::resource('/pages', 'PagesController');
    Route::resource('/partner', 'PartnerController');
    Route::resource('/case-study', 'CaseStudyController');
    Route::resource('/contact', 'ContactController');
    Route::post('case-study/update_status', 'CaseStudyController@updateStatus')->name('case.status.upate');
    Route::resource('/faqs', 'FaqsController');
    Route::post('/faqs-update-status', 'FaqsController@updateStatus')->name('faqs.status.update');
    Route::resource('/settings', 'SettingsController');
    Route::resource('/news', 'NewsController');
    Route::post('/news/news_status', 'NewsController@updateStatus')->name('update__status');
    Route::resource('/translate', 'TranslateController');
    Route::get('/translate_upgrade', 'TranslateController@upgrade')->name('translate__upgrade');
    Route::resource('/logout', 'LogoutController');
    Route::resource('/media', 'MediaController');
    Route::resource('/tagslink', 'TagsLinkController');
    Route::post('/media_upload', 'MediaController@mediaUploading')->name('media_upload');

});
