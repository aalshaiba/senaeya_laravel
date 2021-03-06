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

Route::get('/', 'DashboardController@userShops');

Route::get('privacy', function (){
    return view('pages.privacy');
});

Route::get('contact', function (){
    return view('pages.contact');
});

Route::resource('shops', 'ShopsController');

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('name_view', [
   'as' => 'name',
   'uses' => 'ShopsController@name'
]);

Route::get('link', 'ShopsController@link_existing')->name('link');

Route::post('change_name', [
    'as' => 'apply',
    'uses' => 'ShopsController@change_name'
]);
