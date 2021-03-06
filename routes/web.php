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
    return view('index');
});
Route::get('/admin', function () {
   return view('admin.index');
});
Route::get('/admin/{page}', function ($page) {
   return view('admin.'.$page);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/{page}', function ($page) {
   return view($page);
});
