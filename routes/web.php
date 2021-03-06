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

Route::get('/home', 'HomeController@home');

Route::get('/contact', 'HomeController@contact');
Route::get('/about', 'HomeController@about');

Route::get('/articles', 'ArticlesController@index');
	
Route::get('/articles/create', 'ArticlesController@create');


Route::get('/usercontroller/path',[
   'middleware' => 'First',
   'uses' => 'UserController@showPath'
]);