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
	return redirect()->route('profile');
});


Route::get('/profile', 'ProfileController@show')->name('profile');
Route::post('/profile/store', 'ProfileController@store')->name('profile.store');