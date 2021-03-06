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

Route::get('/', 'PublicController@index');

Route::view('/contact_us', 'contact');

Route::get('/shop', 'PublicController@displayProducts');

Route::get('/product/{id}', 'PublicController@displaySingleProduct');

Route::get('/shop/company/{id}', 'PublicController@displayBycompany');

Route::get('/shop/category/{id}', 'PublicController@displayBycategory');

Route::post('/contact', 'PublicController@contact');

Route::post('/newsletter', 'PublicController@newsletter');


Auth::routes();

Route::get('/home', 'PublicController@index')->name('home');

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::view('/admin', 'admin.dashboard');
    Route::get('/product', 'ProductController@get');
    Route::get('/category', 'CategoryController@get');
    Route::get('/company', 'CompanyController@get');
    Route::get('/addProduct', 'ProductController@show');
    Route::view('/addCategory', 'admin.addCategory');
    Route::view('/addCompany', 'admin.addCompany');
    Route::post('/addProduct', 'ProductController@add');
    Route::post('/updateProduct/{id}', 'ProductController@update');
    Route::get('/deleteProduct/{id}', 'ProductController@delete');
    Route::post('/addCategory', 'CategoryController@add');
    Route::post('/updateCategory/{id}', 'CategoryController@update');
    Route::get('/deleteCategory/{id}', 'CategoryController@delete');
    Route::post('/addCompany', 'CompanyController@add');
    Route::post('/updateCompany/{id}', 'CompanyController@update');
    Route::get('/deleteCompany/{id}', 'CompanyController@delete');
});
