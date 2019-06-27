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

// Check if user is active so they can enter the Posts section
Route::group(['middleware' => ['activeUser']], function(){
    Route::get('/admin', 'AdminController@index')->name('admin');
    Route::resources(['/admin/posts' => 'AdminPostsController']);
    Route::resources(['admin/categories' => 'AdminCategoriesController']);
});

// Use the middleware checking if user isAdmin or not and isActive or not
// Use it on the entire admin route
Route::group(['middleware' => ['activeUser','admin']], function(){
    Route::resources(['admin/users' => 'AdminUsersController']);
});


Route::get('/', 'HomeController@index')->name('home');
