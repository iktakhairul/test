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

Route::view('/','welcome');
Route::view('About','About');
Route::view('Contact','Contact');
Route::get('customer', 'App\Http\Controllers\CustomerController@list');
Route::post('customer', 'App\Http\Controllers\CustomerController@store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard')->name('dashboard');
Auth::routes();
