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

// Main
Route::get('/', ['uses' => 'MainsController@index']);

// Login/Logout
Route::get('/login', ['uses' => 'AdminsController@showLoginForm']);
Route::post('/login', ['uses' => 'AdminsController@login']);
Route::post('/logout', ['uses' => 'AdminsController@logout']);

// Profile
Route::get('/profile', ['uses' => 'ProfilesController@index']);
Route::get('/edit_profile', ['uses' => 'ProfilesController@showEditForm']);
Route::post('/edit_profile', ['uses' => 'ProfilesController@edit']);

// Customer
Route::get('/customer', ['uses' => 'CustomersController@index']);
Route::post('/add', ['uses' => 'CustomersController@add']);
Route::post('/minus', ['uses' => 'CustomersController@minus']);
Route::post('/save', ['uses' => 'CustomersController@save']);

// Media
Route::get('/media', ['uses' => 'MediasController@index']);
Route::post('/add_publication', ['uses' => 'MediasController@add']);
Route::get('/edit_publication/{id_publikasi}', ['uses' => 'MediasController@showEditForm']);
Route::post('/edit_publication', ['uses' => 'MediasController@edit']);
Route::post('/delete_publication/{id_publikasi}', ['uses' => 'MediasController@delete']);

//Messages
Route::get('/messages',['uses'=> 'MessagesController@index']);