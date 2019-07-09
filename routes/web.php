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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create-inventory', 'InventoryController@index');
Route::post('/register-inventory', 'InventoryController@store')->name('register-inventory');
Route::get('/view-inventory', 'InventoryController@show');
Route::get('/buy-inventory/{id}', 'InventoryController@buy');
Route::post('/sale-inventory', 'InventoryController@buy_store')->name('sale-inventory');;
Route::get('/view-delivery', 'InventoryController@show_delivery');
