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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin Routes Start
Route::get('/admin', function () {
   return view('admin.layouts.admin');
});
Route::get('/admin/dashboard', function () {
    return view('admin.Products');
});
//Admin Routes End

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/admin/');

});
