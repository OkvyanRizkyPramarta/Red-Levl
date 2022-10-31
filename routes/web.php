<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\PartnerController;

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

Route::get('/home', [CustomerController::class, 'index'])->name('customer.home');

Route::get('/about', [CustomerController::class, 'about'])->name('customer.about');

Route::get('/blog', function () {
    return view('user.blog');
});

Route::get('/blog', [CustomerController::class, 'blog'])->name('customer.blog');
Route::get('/blog/{id}', [CustomerController::class, 'detailblog'])->name('detailblog');

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

Route::resource('/admin/blog', BlogController::class);

Route::resource('/admin/industry', IndustryController::class);

Route::resource('/admin/partner', PartnerController::class);

//galery
Route::get('/admin/data-table-gallery', function () {
    return view('admin.gallery.index');
});

Route::get('/admin/data-table-gallery/create', function () {
    return view('admin.gallery.create');
});


