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

Route::match(['get','post'], '/admin', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>['auth']],function(){

	Route::get('/admin/dashboard', 'AdminController@dashboard');
	Route::get('/admin/echantillons/index_echan', 'AdminController@index_echan');
	Route::get('/admin/settings', 'AdminController@settings');
	Route::get('/admin/check-pwd', 'AdminController@chkPassword');
	Route::match(['get','post'], '/admin/update-pwd', 'AdminController@updatePassword');
	/*Route::get('admin/users', 'AdminController@user');*/

	//Echantillons Routes (Admin)

	Route::get('/stocks', 'StocksController@index');
	Route::get('/users/listeperso', 'UsersController@index');
  	Route::get('/substances', 'SubstancespuresController@index');

	//Routes::get(['get','post'], '/admin', 'EchantillonController@addEchantillon');

});

Route::get('/logout', 'AdminController@logout');
Route::resource('stocks', 'StocksController');
Route::resource('echantillons', 'EchantilonsController');
Route::resource('reactifs', 'ReactifsController');
Route::resource('substancespures', 'SubstancespuresController');
Route::resource('vaccins', 'VaccinsController');