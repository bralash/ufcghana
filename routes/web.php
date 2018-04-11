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

Route::group(['middleware' =>['web']], function() {
    Route::get('/', 'PagesController@index');
    Route::get('legality', 'PagesController@legality');

    Route::group(['prefix' => 'auth'], function() {
        Route::get('signup','PagesController@signUp');
        Route::post('signup', 'UserController@signup');
        Route::get('login', 'PagesController@login');
        Route::post('login', 'UserController@login');
        Route::get('verify/{id}','UserController@verify');
        Route::post('verify','UserController@verifyPhone');
    });

    Route::group(['middleware' => 'auth'], function() {
        Route::get('dashboard','DashboardController@index');
        Route::get('auth/logout', 'UserController@logout');
    });

    Route::get('sms', 'UserController@test');
});
