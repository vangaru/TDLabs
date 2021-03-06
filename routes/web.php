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

Route::get('/', 'IndexController@getReviews')->name('index');

Route::get('/home', 'HomeController@index' )->name('home');

Route::get('/about', function () { return view('about'); })->name('about');

Route::get('/service', 'ServiceController@getService')->name('service');

Route::get('/contacts', function () {
	return view('contacts');
})->name('contacts');

// Route::get('/auth/login', function() {
// 	return view('login');
// })->name('login');

// Route::get('/auth/register', function() {
// 	return view('register');
// })->name('register');

Route::post('/addReview', 'IndexController@addReview')->name('addReview');

Auth::routes();

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){

	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');

	
	Route::prefix('reviews')->group(function(){
		
		Route::get('/', 'AdminReviewsController@getReviews')->name('admin.reviews');

		Route::post('/sort', 'AdminReviewsController@sort')->name('admin.reviews.sort');

		Route::get('/delete/{id}', 'AdminReviewsController@deleteReview')->name('admin.reviews.delete');
	});


	Route::prefix('users')->group(function(){

		Route::get('/', 'AdminUsersController@getUsers')->name('admin.users');

		Route::post('/sort', 'AdminUsersController@sort')->name('admin.users.sort');

		Route::get('/delete/{id}', 'AdminUsersController@deleteUser')->name('admin.users.delete');
	});


	Route::prefix('service')->group(function(){

		Route::get('/', 'AdminServiceController@getService')->name('admin.service');

		Route::post('/addService', 'AdminServiceController@addService')->name('admin.service.add');

		Route::get('/delete/{id}', 'AdminServiceController@deleteService')->name('admin.service.delete');

		Route::get('/redact/{id}', 'AdminServiceController@getOneService')->name('admin.service.redact');

		Route::post('/redact/{id}', 'AdminServiceController@redactService')->name('admin.service.redact.submit');
	});

});
