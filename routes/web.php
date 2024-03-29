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
Route::get('todos','TodosController@index');
Route::get('todos/{todo}','TodosController@show');
Route::get('newtodo','TodosController@newtodo');
Route::post('store-todo','TodosController@store');
Route::get('todos/{todo}/edit','TodosController@edit');
Route::post('update-todo','TodosController@update');
Route::get('todos/{todo}/delete','TodosController@delete');
Route::get('todos/{todo}/complete','TodosController@complete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
