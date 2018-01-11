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
Route::get('foo/foo2', 'FooController@foo2');
Route::get('sample/search', 'SampleController@search');
// CRUD画面
Route::resource('posts', 'PostController');
Route::post('posts/add', 'PostController@add');
Route::get('posts/edit/{title}','PostController@edit');
Route::post('posts/update/{title}','PostController@update');
Route::post('posts/destroy/{title}','PostController@destroy');
Route::get('posts','PostController@index');
