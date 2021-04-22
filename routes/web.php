<?php

use Illuminate\Http\Request;
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

Route::get('/', 'UserController@index');
Route::get('/registration', 'UserController@update')->name('registration');
Route::get('/show', 'UserController@show');

Route::post('/', 'CheckController@check')->name('login');
Route::post('/register', 'UserController@create')->name('register');

// adminka
Route::get('/admin', 'AdminController@index');




