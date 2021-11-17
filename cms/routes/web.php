<?php

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
//書き方　Route::get([アドレス], [関数など]);
Route::get('/', function () {
    return view('welcome');
});
//書き方　Route::get([アドレス], [Controller名]@[メソッド名]);
Route::get('/hello', 'HelloController@index');   // <--- 追加
Route::post('/timeline', 'Auth\TimelineController@postTweet');    // <--- 追加