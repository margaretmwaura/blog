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
Route::get('/users/{id}/{name}', function ($id,$name) {
    return 'This is the id of the dynamic route '.$id.'and another value '.$name;
});
*/


Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::resource('posts','PostsController');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
