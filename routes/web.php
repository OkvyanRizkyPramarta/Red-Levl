<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\InternshipController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UniversityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SchoolController;
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
Route::get('/blog/search', [CustomerController::class, 'search'])->name('customer.blog.search');
Route::get('/blog', [CustomerController::class, 'blog'])->name('customer.blog');
Route::get('/blog/{id}', [CustomerController::class, 'detailblog'])->name('detailblog');
Route::get('/gallery', [CustomerController::class, 'image'])->name('customer.image');
Route::get('/service', function () {
    return view('user.service.service');
});

//Detail Service Start
    Route::get('/service/website/', function () {
        return view('user.service.website.index');
    });
    Route::get('/service/website/custom', function () {
        return view('user.service.website');
    });
//Detail Service End

//Internship
    Route::get('/internship/index', function () {
        return view('user.internship.index');
    });

    //Internship University
    Route::middleware(['auth', 'University'])->group(function () {
        Route::get('/internship/university/dashboard', [UniversityController::class, 'universityIndex'])->name('university.index');
        Route::get('/internship/university/download', [UniversityController::class, 'getDownload'])->name('university.download');
        Route::get('/internship/university/show', [UniversityController::class, 'universityShow'])->name('university.show');
        Route::get('/internship/university/inputdata', [UniversityController::class, 'universityCreate'])->name('university.create');
        Route::post('/internship/university/inputdata', [UniversityController::class, 'universityStore'])->name('university.store');
    });

    Route::middleware(['auth', 'School'])->group(function () {
        Route::get('/internship/school/dashboard', [SchoolController::class, 'schoolIndex'])->name('school.index');
        Route::get('/internship/school/show', [SchoolController::class, 'schoolShow'])->name('school.show');
        Route::get('/internship/school/inputdata', [SchoolController::class, 'schoolCreate'])->name('school.create');
        Route::post('/internship/school/inputdata', [SchoolController::class, 'schoolStore'])->name('school.store');
    });

    Route::middleware(['auth', 'Industry'])->group(function () {
        Route::get('/internship/industry/dashboard', [InternshipController::class, 'industryIndex'])->name('industry.index');
        Route::get('/internship/industry/show', [InternshipController::class, 'industryShow'])->name('industry.show');
        Route::get('/internship/industry/member', [InternshipController::class, 'industryMember'])->name('industry.member');
        Route::post('/internship/industry/member', [InternshipController::class, 'memberStore'])->name('industry.member.upgrade');
        Route::get('/internship/industry/inputdata', [InternshipController::class, 'industryCreate'])->name('industry.create');
        Route::post('/internship/industry/inputdata', [InternshipController::class, 'industryStore'])->name('industry.store');
    });

// login Owner
    Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [AuthController::class, 'login'])->name('login.admin')->middleware('guest');
    Route::get('/register', [AuthController::class, 'register'])->name('register.user')->middleware('guest');
    Route::post('/register', [AuthController::class, 'prosesRegister'])->name('proses.register')->middleware('guest');
    Route::get('/signout', [AuthController::class, 'signOut'])->name('signout'); 

//Owner
Route::middleware(['auth', 'Owner'])->group(function () {
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
        Route::get('/admin/internship', [InternshipController::class, 'adminInternshipIndex'])->name('admin.internship');
        Route::get('/admin/internship/edit/{internship}', [InternshipController::class, 'adminInternshipEdit'])->name('admin.internship.edit');
        Route::put('/admin/internship/update/{internship}', [InternshipController::class, 'adminInternshipUpdate'])->name('admin.internship.update');
        Route::delete('/admin/internship/{internship}', [InternshipController::class, 'adminInternshipDestroy'])->name('admin.internship.destroy');
    Route::resource('/admin/image', ImageController::class);
    Route::resource('/admin/member', MemberController::class);
    Route::resource('/admin/partner', PartnerController::class);
    //Route::resource('/admin/user', UserController::class);
        Route::get('/admin/user', [UserController::class, 'index'])->name('admin.user.index');
        Route::get('/admin/user/show/{user}', [UserController::class, 'show'])->name('admin.user.show');
        Route::get('/admin/user/edit/{user}', [UserController::class, 'edit'])->name('admin.user.edit');
        Route::put('/admin/user/update/{user}', [UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/admin/user/{user}', [UserController::class, 'destroy'])->name('admin.user.destroy');
});