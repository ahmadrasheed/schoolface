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

Route::get('home', function () {
    return view('home');
});
Route::view('home','home');
Route::view('/','home');

Route::get('customers','customersController@list')->name('customers.list');
Route::post('customers','customersController@store');
Route::get('customers/{customer}','customersController@show')->name('customers.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
