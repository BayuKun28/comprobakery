<?php

use App\Http\Controllers\FrontEnd;
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
