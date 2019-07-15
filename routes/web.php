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
Route::get('/index','ProductController@index')->name('product.index');
Route::get('/{id}/details','DetailController@details')->name('product.ditails');
Route::get('/cart','ShoppingCartController@index')->name('shopping.cart');

Route::group(['prefix'=>'products'],function (){
    Route::get('/','admin\ProductController@index')->name('admin.index');
    Route::get('/create','admin\ProductController@create')->name('admin.create');
    Route::post('/create','admin\ProductController@store')->name('admin.store');
    Route::get('/{id}/edit','admin\ProductController@edit')->name('admin.edit');
    Route::post('/{id}/edit','admin\ProductController@update')->name('admin.update');
    Route::get('/{id}/destroy','admin\ProductController@destroy')->name('admin.destroy');
    Route::get('/filter','admin\ProductController@filterByCity')->name('admin.filterByType');
    Route::get('/search','admin\ProductController@search')->name('admin.search');
});
Route::group(['prefix'=>'type'],function (){
    Route::get('/','admin\Types_ProductController@index')->name('types.index');
    Route::get('/create','admin\Types_ProductController@create')->name('types.create');
    Route::post('/create','admin\Types_ProductController@store')->name('types.store');
    Route::get('/{id}/edit','admin\Types_ProductController@edit')->name('types.edit');
    Route::post('/{id}/edit','admin\Types_ProductController@update')->name('types.update');
    Route::get('/{id}/destroy','admin\Types_ProductController@destroy')->name('types.destroy');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
