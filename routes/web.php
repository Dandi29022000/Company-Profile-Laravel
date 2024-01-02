<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TimKamiController;

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

Route::get('/', function(){
    return redirect('/frontend/dashboard');
});

// Auth
Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    Route::post('postlogin', 'postLogin')->name('postlogin');
    Route::post('postregister', 'postregister')->name('register.post');
    Route::get('logout', 'logout')->name('logout');
});

// ADMIN
Route::group(['middleware' => ['auth', 'CekLevel:admin']], function () {
    Route::get('/admin', [AdminController::class, 'index']);

    // DATA USER
    Route::resource('/admin/user', UserController::class);

    // DATA PORTOFOLIO
    Route::resource('/admin/portofolio', PortofolioController::class);

    // DATA BLOG
    Route::resource('/admin/blog', BlogController::class);

    // DATA BLOG
    Route::resource('/admin/tim-kami', TimKamiController::class);
});

// TAMPILAN FRONTEND USER
Route::get('/frontend/dashboard', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/frontend/service', [FrontendController::class, 'service'])->name('frontend.service');
Route::get('/frontend/portofolio', [FrontendController::class, 'portofolio'])->name('frontend.portofolio');
Route::get('/frontend/portofolio/detail/{id}', [FrontendController::class, 'portofolioShow'])->name('frontend.portofolio-detail');

Route::get('/frontend/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/frontend/blog/detail/{id}', [FrontendController::class, 'blogShow'])->name('frontend.blog-detail');
// Route::get('/frontend/blog', [FrontendController::class, 'blog'])->name('frontend.blog');
Route::get('/frontend/about', [FrontendController::class, 'about'])->name('frontend.about');
Route::get('/frontend/contact', [FrontendController::class, 'contact'])->name('frontend.contact');