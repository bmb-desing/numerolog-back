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

Route::get('/', 'IndexController@index');
Route::get('journal', 'JournalController@index')->name('journal.all');
Route::get('journal/{item}', 'JournalController@item')->name('journal.item');
Route::post('payment', 'PaymentController@post')->name('payment');
Route::post('payment-result', 'PaymentController@result')->name('payment-result');
Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admincp'] , function() {
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('prediction', 'Admin\PredictionController');
    Route::resource('price', 'Admin\PriceController');
    Route::resource('journal', 'Admin\JournalController');
    Route::get('social', 'Admin\SocialController@get')->name('social.get');
    Route::post('social', 'Admin\SocialController@post')->name('social.post');
    Route::resource('pages', 'Admin\PageController');
    Route::get('sitemap', 'Admin\SitemapController@siteMap')->name('sitemap');
});
Route::group(['middleware' => 'guest'], function (){
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
});
Route::group(['middleware' => 'auth'], function (){
    Route::post('logout',['as'=>'logout', 'uses' => 'Auth\LoginController@logout']);
});
