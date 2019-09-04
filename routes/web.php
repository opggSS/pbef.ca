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


	Route::post('/donate', 'MessageController@store');


	Route::get('/gallery' ,'PageController@getGallery');

	Route::get('/public_info', 'PageController@getPublicInfo');
	Route::get('/projects', 'PageController@getProjects');
	Route::get('/news/{slug}', 'PageController@getNews');
	Route::get('/newslist', 'PageController@getNewsList');
	Route::get('/about_us', 'PageController@getAboutUs');
	Route::get('/donate', 'PageController@getDonate');


	
	//     return view('admins.pages.index');
	// });

	// Route::get('/login', 'UserController@index');
	// Route::get('admins/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
	// Route::post('admins/login', 'Auth\AuthController@postLogin');
	// Route::get('admins/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

});

// Route::group(['middleware' => 'admin'], function () {

	// Route::get('/add_news', 'PostController@create');




// Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){

	Route::resource('/news' , 'PostController');
	Route::resource('/categories' , 'CategoryController');
	Route::resource('/galleries' , 'GalleryController');
	Route::resource('/partners' , 'PartnerController');

	Route::get('/pageContents/{slug}' , 'PageContentController@pages');
	Route::resource('/pageContents' , 'PageContentController');

	Route::get('/messages', 'MessageController@index');
	Route::get('/messages/unread', 'MessageController@unread');
	Route::get('/messages/view/{id}', 'MessageController@view');
	Route::post('/reply/{id}', 'MessageController@sendEmail');


	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

	Route::get('/' ,'AdminController@index')->name('admin.dashboard');
	Route::resource('/users' ,'AdminManageController');

});
