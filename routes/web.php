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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/index', function (){
//  return view('admin.banner.index');
//});

Route::group(['middleware'=>['admin:admin','auth']], function(){
    Route::get('banner/create','Admin\BannerController@create')->name('create.banner');
    Route::post('banner/store','Admin\BannerController@store')->name('store.banner');
    Route::get('banner/index','Admin\BannerController@index')->name('banner.index');
    Route::delete('banner/delete/{id}','Admin\BannerController@delete')->name('delete.banner');

    Route::get('movie/create','Admin\MovieController@create')->name('create.movie');
    Route::post('/store','Admin\MovieController@store')->name('store.movie');
    Route::get('movie/index','Admin\MovieController@index')->name('movie.index');
    Route::delete('movie/delete/{id}','Admin\MovieController@delete')->name('delete.movie');

    Route::get('categories/create','Admin\CategoryController@create')->name('create.categories');
    Route::get('categories/index','Admin\CategoryController@index')->name('categories.index');
    Route::post('categories/store','Admin\CategoryController@store')->name('store.categories');
    Route::delete('category/delete/{id}','Admin\CategoryController@delete')->name('delete.category');
});

Route::get('/','Movie\HomeController@index')->name('movie.home');
Route::get('movie/detail/{id}','Movie\HomeController@detail')->name('movie.detail');

//kPOXZfKJgU
