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

//front page
Route::get('/', 'HomeController@index')->name('home');

//Route Manual auth
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Auth::routes(['register' => false]);

Route::get('/home', function () {
    return redirect()->route('admin');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');
    Route::resource('/about', 'AboutController')
        ->except(['create', 'edit', 'update']);
    Route::resource('tani', 'TaniController');
    Route::resource('product', 'ProductController');
});

Route::get('/product', 'HomeController@product')->name('home.product');
Route::get('/product/{id}', 'HomeController@showProduct')->name('home.product.show');
Route::get('/tani', 'HomeController@tani')->name('home.tani');
Route::get('/tani/{id}', 'HomeController@showTani')->name('home.tani.show');
