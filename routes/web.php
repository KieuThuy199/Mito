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
    return view('admin.index');
});

// Route::group(
//     ['namespace' => 'WebController', 'as' => 'news.'],
//     function () {
//         Route::get('news', ['as' => 'news', 'uses' => 'NewsController@index']);
//         Route::get('news-data', ['as' => 'news.data', 'uses' => 'NewsController@data']);

//         Route::get('news/add', ['as' => 'news.add', 'uses' => 'NewsController@add']);
// });
Route::get('news', 'WebController\NewsController@index');
Route::get('news-data', 'WebController\NewsController@data');
Route::get('news/add', 'WebController\NewsController@add')->name('add');
// Route::get('news.add', function () {
//     return redirect()->route('add')->with('status', 'Thêm tin tức thành công!');
// });
// Route::get('news.fail', function () {
//     return redirect()->route('add')->with('fail', 'Không thêm được!');
// });
