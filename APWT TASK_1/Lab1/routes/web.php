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

Route::get('/','App\Http\Controllers\HomeController@home');
Route::get('/home', 'App\Http\Controllers\HomeController@home');
Route::get('/product/service', 'App\Http\Controllers\HomeController@service');

Route::get('/about', 'App\Http\Controllers\HomeController@about');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
