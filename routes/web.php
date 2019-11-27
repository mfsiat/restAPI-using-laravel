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

// this is the main reason we are getting the items
// to post any item we first need to get rid of the csrf token
// we need to specify that on api/ post method we are excluding the csrf token 
Route::resource('api/items', 'ItemsController');
