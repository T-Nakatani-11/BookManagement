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

// 書籍一覧表示
Route::get('/', 'App\Http\Controllers\BookController@showList')->name('books');

// 書籍詳細表示
Route::get('/book/{id}', 'App\Http\Controllers\BookController@showDetail')->name('detail');