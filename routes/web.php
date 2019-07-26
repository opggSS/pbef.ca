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

Route::group(['middleware' => ['web']], function () {
	Route::get('/' ,'PageController@index');
	Route::get('/about_us', function () {
	    return view('about_us');
	});
	Route::get('/donate', function () {
	    return view('donate');
	});

	Route::post('/donate', 'MessageController@store');


	Route::get('/gallery', function () {
	    return view('gallery');
	});

	Route::get('/public_info', function () {
	    return view('public_info');
	});
	Route::get('/projects', function(){
	    return view('projects');
	});
	Route::get('admin' , function () {
	    return view('admins.pages.index');
	});



	// Route::get('/login', 'UserController@index');
	// Route::get('admins/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	// Route::post('admins/login', 'Auth\AuthController@postLogin');
	// Route::get('admins/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

});

// Route::group(['middleware' => 'admin'], function () {

	// Route::get('/add_news', 'PostController@create');
	Route::resource('admin/news' , 'PostController');
	Route::resource('admin/categories' , 'CategoryController');
	Route::resource('admin/galleries' , 'GalleryController');
	Route::resource('admin/partners' , 'PartnerController');

	Route::get('admin/pageContents/{slug}' , 'PageContentController@pages');
	Route::resource('admin/pageContents' , 'PageContentController');

	Route::get('admin/messages', 'MessageController@index');
	Route::get('admin/messages/unread', 'MessageController@unread');
	Route::get('admin/messages/view/{id}', 'MessageController@view');
	Route::post('admin/reply/{id}', 'MessageController@sendEmail');



