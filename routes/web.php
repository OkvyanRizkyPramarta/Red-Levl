<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/about', function () {
    return view('user.about');
});

Route::get('/blog', function () {
    return view('user.blog');
});

Route::get('/detailblog', function () {
    return view('user.detailblog');
});

Route::get('/gallery', function () {
    return view('user.gallery');
});

Route::get('/service', function () {
    return view('user.service.service');
});

Route::get('/service/website', function () {
    return view('user.service.website');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});


