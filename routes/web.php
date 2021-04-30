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

Route::get('/', function () {
    return view('guest.welcome');
});

Auth::routes(['register' => false]);

//user routes
Route::group(['namespace' => 'User', 'prefix' => 'user', 'middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['namespace' => 'Manage', 'prefix' => 'manage', 'as' => 'manage.', 'middleware' => 'role:superadministrator|administrator'], function () {
    Route::resource('/users', 'UserController')->name('*','users');
    Route::resource('/sites', 'SiteController')->name('*','sites');
    Route::resource('/plots', 'PlotController')->name('*','plots');
});



