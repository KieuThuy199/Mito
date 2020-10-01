<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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

Route::get('index', 'UserController\UserController@index');
Route::get('/a', function () {
    return view('admin.newsadd');
});
Route::get('/b', function () {
    return view('admin.changeinfor');
});
Route::get('/c', function () {
    return view('admin.index');
});

