<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontEnd;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(FrontEnd::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/product', 'product')->name('product');
    Route::get('/detail_product', 'detail_product')->name('detail_product');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/detail_blog', 'detail_blog')->name('detail_blog');
    Route::get('/contact', 'contact')->name('contact');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/panel', 'index')->name('panel');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/panel/dashboard', 'index')->name('dashboard');
});
Route::controller(ModulesController::class)->group(function () {
    Route::get('panel/home', 'home')->name('panel/home');
    Route::get('panel/about', 'about')->name('panel/about');
    Route::get('panel/product', 'product')->name('panel/product');
    Route::get('panel/blog', 'blog')->name('panel/blog');
    Route::get('panel/add_blog', 'add_blog')->name('panel/add_blog');
    Route::get('panel/manage_kategori', 'manage_kategori')->name('panel/manage_kategori');
});
Route::controller(SettingController::class)->group(function () {
    Route::get('panel/app_setting', 'app_setting')->name('panel/app_setting');
    Route::get('panel/user_setting', 'user_setting')->name('panel/user_setting');
});
