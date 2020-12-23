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

// 書籍登録画面表示
Route::get('/book/create', 'App\Http\Controllers\BookController@showCreate')->name('create');

// 書籍登録
Route::post('/book/store', 'App\Http\Controllers\BookController@exeStore')->name('store');