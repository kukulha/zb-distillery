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

//LOGIN Y REGISTER
Auth::routes();

//WEB
Route::get('/', 'Web\PagesController@disclaimer')->name('disclaimer');
Route::get('/home', 'Web\PagesController@index')->name('home');
Route::get('/zb_distillery', 'Web\PagesController@zb')->name('zb');
Route::get('/blog', 'Web\PagesController@blog')->name('posts');
Route::get('/blog/{slug}', 'Web\PagesController@post')->name('post');

//ADMIN
Route::get('/admin', 'Web\PagesController@admin')->name('admin');
Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');
Route::resource('messages', 'Admin\MessageController');