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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', 'AdminController@index')->name('admin')->middleware('checkRole:admin');
Route::get('admin/{id}', 'AdminController@show')->name('admin.show')->middleware('checkRole:admin');
Route::post('admin/edit/{id}', 'AdminController@edit')->name('admin.edit')->middleware('checkRole:admin');

Route::get('user', 'UserController@index')->name('user')->middleware(['checkRole:user']);
Route::post('user', 'UserController@aduan')->name('user.aduan')->middleware(['checkRole:user']);
