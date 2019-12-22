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

Route::get('/', function () {
    return view('welcome');
});
//user route
Route::get('user/profile', 'UserProfileController@index')->name('user.profile'); //detailsview
Route::get('user/edit', 'UserProfileController@edit')->name('user.edit'); //edit details form
Route::post('user/update', 'UserProfileController@update')->name('user.update'); //update details and save
Route::get('delete/{id}', 'UserProfileController@destroy'); //delete




//company route
Route::get('company/profile', 'CompanyProfileController@index')->name('company.profile'); //detailsview
Route::get('company/create', 'CompanyProfileController@create')->name('company.create'); //create form
Route::post('company/store', 'CompanyProfileController@store')->name('company.store'); //save or store
Route::get('/company/edit/{id}', 'CompanyProfileController@edit')->name('company.edit'); //edit details form
Route::post('company/update/{id}', 'CompanyProfileController@update')->name('company.update'); //update details and save
Route::get('company/delete/{id}', 'CompanyProfileController@delete'); //delete



//employee route
Route::get('employee/details', 'EmployeeDetailsController@index')->name('employee.details');//detailsview
Route::get('employee/create', 'EmployeeDetailsController@create')->name('employee.create'); //create form
Route::post('employee/store', 'EmployeeDetailsController@store')->name('employee.store'); //save or store
Route::get('/employee/edit/{id}', 'EmployeeDetailsController@edit')->name('employee.edit'); //edit details form
Route::post('employee/update/{id}', 'EmployeeDetailsController@update')->name('employee.update'); //update details and save
Route::get('employee/delete/{id}', 'EmployeeDetailsController@delete'); //delete
