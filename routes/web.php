<?php
namespace App\Http\Controllers\Admin;


use App\Http\Middleware\UserActions;
use App\Models\Users;
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

Route::get('/', 'Admin\UserController@index');

Route::name('user.')->group(function (){
    Route::middleware('auth:api')->get('/show', 'Admin\Usercontroller@show')->name('show');

    Route::post('/login', 'Admin\CheckController@check')->name('login');
    Route::post('/register', 'Admin\UserController@create')->name('register');
    Route::get('/registration', 'Admin\UserController@store')->name('registration');
});
Route::name('admin.')->group(function (){
    Route::get('admin', 'Admin\AdminsController@index')->name('admin');
});




