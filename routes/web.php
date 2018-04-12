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

Route::get('/', 'PostsController@index')->name('posts.index');
Route::resource('talks', 'TalksController');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('newsletter', function () {
    return view('newsletter');
})->name('newsletter');

Auth::routes();
