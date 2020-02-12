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

Route::redirect('/', '/home');

Route::get('/home', 'Front\HomeController@index');

Route::get('/posts', 'Front\PostController@index');

Route::get('/posts/{slug}', 'Front\PostController@show');

Auth::routes();

Route::middleware('auth')->prefix('back')->group(function () {

    Route::redirect('/', '/back/dashboard');

    Route::get('/dashboard', 'Back\DashboardController@index');
    
    Route::get('users/datatable', 'Back\UserController@datatable');
    Route::resource('users', 'Back\UserController');

    Route::get('posts/datatable', 'Back\PostController@datatable');
    Route::get('posts/{post}/tags', 'Back\PostController@tags');
    Route::resource('posts', 'Back\PostController');

    Route::get('tags/datatable', 'Back\TagController@datatable');
    Route::get('tags/{tag}/posts', 'Back\TagController@posts');
    Route::resource('tags', 'Back\TagController');
});
