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

Route::get('/dashboarduser', 'DashboardUserController@index')->name('dashboarduser');
Route::get('/laporanuser', 'DashboardUserController@laporanuser')->name('laporanuser');

Route::get('/register', 'AuthController@getRegister');
Route::post('/register', 'AuthController@postRegister')->name('register');

Route::get('/login', 'AuthController@getlogin');
Route::post('/login', 'AuthController@postlogin')->name('login');

Route::get('/logout',  'AuthController@logout')->name('logout');
