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

//BLOG 页面
Route::get('/','IndexController@index');
//BLOG文章
Route::get('/posts/{posts}','IndexController@posts');