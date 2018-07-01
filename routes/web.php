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
Route::get('nayanepal', 'NayanepalController@index');
Route::get('nayanepal/{id}', [
	'uses'=>'NayanepalController@showdetail',
	'as'=>'user.showdetail'

]);
Route::get('nayanepal/c/{id}', [
	'uses'=>'NayanepalController@show',
	'as'=>'user.show'

]);



Auth::routes();  

Route::namespace('Admin')->prefix('admin')->as('admin.')->middleware('auth')->group(function(){

			Route::get('', 'HomeController@index')->name('home');
			Route::resource('catagory', 'CatagoryController');
			Route::resource('news', 'NewsController');

					});
