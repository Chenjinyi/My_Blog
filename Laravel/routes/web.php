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

//登录 注册
Auth::routes();
//个人中心
Route::get('/home', 'HomeController@index')->name('home');

//添加文章
Route::get('/home/add','PostsController@posts')->middleware('auth');
Route::post('/home/add','PostsController@add')->middleware('auth');
//文章列表
Route::get('/home/show','PostsController@show')->middleware('auth');
//文章编辑
Route::get('/home/{posts}/edit','PostsController@edit')->middleware('auth');
Route::post('/home/update','PostsController@update')->middleware('auth');
//文章删除
Route::get('/home/{posts}/del','PostsController@del')->middleware('auth');

//Markdown
Route::get('/home/markdown',function (){
    return view('markdown');
});