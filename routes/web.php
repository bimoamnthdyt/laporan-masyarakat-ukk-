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
    return view('index');
});



Route::get('/dashboarduser', 'UserController@index')->name('dashboarduser');
Route::get('/laporanuser', 'UserController@laporanuser')->name('laporanuser');

Route::get('register', 'Auth\RegisterController@getRegister');
Route::post('register', 'Auth\RegisterController@postRegister')->name('register');

Route::get('login', 'Auth\LoginController@getlogin');
Route::post('login', 'Auth\LoginController@postlogin')->name('login');

Route::get('logout',  'Auth\LoginController@logout')->name('logout');
