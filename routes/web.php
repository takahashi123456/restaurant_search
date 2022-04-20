<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotpepperController;
use App\Http\Controllers\FormController;

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

Route::post('/list', 'App\Http\Controllers\HotpepperController@get_list');
Route::get('/', 'App\Http\Controllers\FormController@search');
Route::get('/detail/{id}','App\Http\Controllers\HotpepperController@get_detail')->name("detail") ;

