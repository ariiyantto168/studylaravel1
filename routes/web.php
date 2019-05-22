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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// users
Route::get('/users', 'UsersController@index')->name('profile');
Route::get('/users/create-new', 'UsersController@create_page')->name('create');

// Categories
Route::get('/categories', 'CategoriesController@index')->name('index');
Route::get('/categories/create-new', 'CategoriesController@create_page')->name('create_page');
Route::post('/categories/create-new', 'CategoriesController@save_page')->name('create_page');
// Route::get('/categories/create-new', 'CategoriesController@save_page')->name('create');
// Route::get('/categories/update/{categories}', 'CategoriesController@update_page')->name('edit');
// Route::post('/categories/update/{categories}', 'CategoriesController@update_save')->name('update');


// Items
Route::get('/items', 'ItemsController@index')->name('index');
Route::get('/items/create-new', 'ItemsController@create_page')->name('create');