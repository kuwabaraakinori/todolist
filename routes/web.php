<?php

use App\Http\Controllers\ContentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/*Auth::routes();/*

*/

Route::get('/' , 'ContentController@index')->name('index');
Route::resource('content', 'ContentController' , ['except'=>['index']]);
Route::resource('user', 'UserController');
Auth::routes();
Route::get('logout' , 'Auth\LoginController@logout')->name('logout.get');
Route::get('/home', 'HomeController@index')->name('home');
