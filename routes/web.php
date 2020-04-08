<?php

use Illuminate\Support\Facades\Route;

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
    return view('backend.master');
});

Route::namespace('Backend')->prefix('admin')->name('admin.')->group(function () {
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/','CategoryController@index')->name('index');
        Route::get('create','CategoryController@create')->name('create');
        Route::post('store','CategoryController@store')->name('store');
        Route::get('{id}/edit','CategoryController@edit')->name('edit');
        Route::post('{id}/edit','CategoryController@update')->name('update');
        Route::get('{id}/destroy','CategoryController@destroy')->name('destroy');
    });

    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/','ProductController@index')->name('index');
        Route::get('create','ProductController@create')->name('create');
        Route::post('store','ProductController@store')->name('store');
        Route::get('{id}/edit','ProductController@edit')->name('edit');
        Route::post('{id}/edit','ProductController@update')->name('update');
        Route::get('{id}/destroy','ProductController@destroy')->name('destroy');
    });
    
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/','UserController@index')->name('index');
        Route::get('create','UserController@create')->name('create');
        Route::post('store','UserController@store')->name('store');
        Route::get('{id}/edit','UserController@edit')->name('edit');
        Route::post('{id}/edit','UserController@update')->name('update');
        Route::get('{id}/destroy','UserController@destroy')->name('destroy');
    });
});