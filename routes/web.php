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
    $current_page = 'home';
    return view('home', compact('current_page'));
});
Route::get('/about_us', function () {
    $current_page = 'aboutus';
    return view('about_us', compact('current_page'));
});
Route::get('/donate', function () {
    return view('donate');
});
Route::get('/gallery', function () {
    $current_page = 'gallery';
    return view('gallery', compact('current_page'));
});
Route::get('/public_info', function () {
    $current_page = 'publicinfo';
    return view('public_info', compact('current_page'));
});
Route::get('/projects', function () {
    return view('projects');
});

Route::get('/admins', function () {
    return view('admins/pages/index');
});

Route::get('/admins-login', function () {
    return view('admins/login');
});

Route::get('/admins-add_news', function () {
    return view('admins/pages/add_news');
});



