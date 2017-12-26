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
// ƒ‹[ƒg’Ç‰Á
Route::resource('posts', 'PostController');