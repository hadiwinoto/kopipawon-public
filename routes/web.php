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

// Route::get('/', function () {
//     return view('index');
// });


//views
Route::get('/', 'App\Http\Controllers\Pages\PagesController@ShowHome');
Route::get('/gallery','App\Http\Controllers\Pages\PagesController@ShowGallery');
Route::get('/contact','App\Http\Controllers\Pages\PagesController@ShowContact');
Route::get('/product','App\Http\Controllers\Pages\PagesController@ShowProduct');
Route::get('/franchise','App\Http\Controllers\Pages\PagesController@ShowFranchise');
