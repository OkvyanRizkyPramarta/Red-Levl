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

Route::get('/admin/datatable', function () {
    return view('admin.datatable');
});

Route::get('/admin/formtable', function () {
    return view('admin.formtable');
});


//Blog
Route::get('/admin/data-table-blog', function () {
    return view('admin.blog.index');
});

Route::get('/admin/data-table-blog/create', function () {
    return view('admin.blog.create');
});

//RedLevl
Route::get('/admin/data-table-redlevl', function () {
    return view('admin.redlevl.index');
});

//galery
Route::get('/admin/data-table-gallery', function () {
    return view('admin.gallery.index');
});

Route::get('/admin/data-table-gallery/create', function () {
    return view('admin.gallery.create');
});


