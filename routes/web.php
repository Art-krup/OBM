<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

//Route::get('/', function () {
//    return 123;
////    return Inertia::render('Welcome');
//})->name('home');
//
//Route::get('dashboard', function () {
//    return Inertia::render('Dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//require __DIR__.'/settings.php';
//require __DIR__.'/auth.php';

Route::get('/', App\Http\Controllers\Home\IndexController::class)->name('home.index');

Route::get('/catalog', App\Http\Controllers\Catalog\IndexController::class)->name('catalog.index');

Route::get('/basket', App\Http\Controllers\Basket\IndexController::class)->name('basket.index');

Route::get('/news', App\Http\Controllers\News\IndexController::class)->name('news.index');

Route::get('/product', App\Http\Controllers\Product\IndexController::class)->name('product.index');

//Route::get('/products', App\Http\Controllers\Products\IndexController::class)->name('products.index');
