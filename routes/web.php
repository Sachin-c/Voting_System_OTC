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
Route::get('/in','home@check');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect', 'Auth\LoginController@redirectToProvider');
Route::get('/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('/staff', 'StaffController@show');
Route::get('/student', 'StudentController@show');

Route::post('/storeT', 'StaffController@storeT');
Route::post('/storeCC', 'StaffController@storeCC');
Route::post('/storeS', 'StudentController@storeS');
Route::post('/startV', 'StaffController@startV');
Route::post('/standV', 'StudentController@startV');