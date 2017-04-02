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

// Welcome
Route::get('/', function () {
    return view('welcome');
});

// Main

// Login/Logout
Route::get('/login', ['uses' => 'AdminsController@showLoginForm']);
Route::post('/login', ['uses' => 'AdminsController@login']);
Route::post('/logout', ['uses' => 'AdminsController@logout']);

// Profile
Route::get('/profile', ['uses' => 'ProfilesController@index']);

