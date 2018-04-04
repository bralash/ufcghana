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
    Route::get('signup','PagesController@signUp');

    Route::group(['prefix' => 'auth'], function() {
        Route::post('signup', 'UserController@signup');
    });
});
