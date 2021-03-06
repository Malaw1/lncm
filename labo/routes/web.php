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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::match(['get','post'], '/admin', 'AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/dashboard', 'AdminController@dashboard');


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/demandes', 'Admin\\DemandesController');
Route::resource('admin/demandes', 'Admin\\DemandesController');
Route::resource('admin/reactifs', 'Admin\\ReactifsController');
Route::resource('admin/reactifs', 'Admin\\ReactifsController');