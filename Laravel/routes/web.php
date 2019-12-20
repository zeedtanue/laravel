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



Auth::routes();

Route::get('user/profile', 'UserProfileController@index')->name('user.profile');

Route::get('/', function () {
    return view('welcome');
});

Route::get('delete/{id}', 'UserProfileController@destroy');

Route::get('user/edit', 'UserProfileController@edit')->name('user.edit');

Route::post('user/update', 'UserProfileController@update')->name('user.update');