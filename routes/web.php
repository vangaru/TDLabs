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
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
	return view('about');
})->name('about');

Route::get('/service', function () {
	return view('service');
})->name('service');

Route::get('/contacts', function () {
	return view('contacts');
})->name('contacts');

Route::get('/auth/login', function() {
	return view('login');
})->name('login');

Route::get('/auth/register', function() {
	return view('register');
})->name('register');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
