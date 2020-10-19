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
//     return view('welcome');
// });

Route::get('/a', 'WebController\NewsController@index');

Route::get('/', function () {
    return view('admin.news');
});
// Route::group(
//     ['namespace' => 'WebController', 'as' => 'news.'],
//     function () {
//         Route::get('news.data', ['as' => 'news.data', 'uses' => 'NewsController@data']);
// });
Route::get('news-data', 'WebController\NewsController@data');
