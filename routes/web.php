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

Route::group(['prefix'=>'manager','middleware'=>'auth'], function() {
    Route::get('/', function () {
        return 'ini halaman root manager';
    });

    Route::get('user',function() {
        return 'ini halaman user';
    });

    Route::get('member' ,function(){
        return 'ini halaman member';
    });
});
 
Route::group(['prefix'=>'karyawan','middleware'=>'auth'], function() {
    Route::get('/' ,function(){
        return 'ini halaman root karyawan';
    });

    Route::get('user',function() {
        return 'ini halaman user';
    });

    Route::get('member' ,function(){
        return 'ini halaman member';
    });
});

    Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');