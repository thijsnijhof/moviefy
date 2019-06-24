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

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');
Route::resources(['/admin/posts' => 'AdminPostsController']);
Route::resources(['/admin/users' => 'AdminUsersController']);


Route::get('/', 'HomeController@index')->name('home');
