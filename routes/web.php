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
Route::get('posts','PostController@index');
Route::post('posts/add', 'PostController@add');
Route::get('posts/edit/{title}','PostController@edit');
Route::post('posts/update/{title}','PostController@update');
Route::post('posts/destroy/{title}','PostController@destroy');
Route::get('posts/show/{title}','PostController@show');

// Sample画面
Route::resource('sample', 'SampleController');
Route::get('sample','SampleController@search');
Route::post('sample/search','SampleController@index');
Route::post('sample/add', 'SampleController@add');
Route::get('sample/edit/{title}','SampleController@edit');
Route::post('sample/update/{title}','SampleController@update');
Route::post('sample/destroy/{title}','SampleController@destroy');
Route::get('sample/show/{title}','SampleController@show');
