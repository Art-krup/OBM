<?php

use Illuminate\Support\Facades\Route;

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

//главная страница
Route::get('/', App\Http\Controllers\Home\IndexController::class)->name('home.index');

//страница с основным каталогом
Route::get('/catalog', App\Http\Controllers\Catalog\IndexController::class)->name('catalog.index');

//страница с карзиной
Route::get('/basket', App\Http\Controllers\Basket\IndexController::class)->name('basket.index');

//новостная страница
Route::get('/news', App\Http\Controllers\News\IndexController::class)->name('news.index');

//страница конкретного товара
Route::get('/product', App\Http\Controllers\Product\IndexController::class)->name('product.index');

//Route::get('/products', App\Http\Controllers\Products\IndexController::class)->name('products.index');

Route::get('/admin', App\Http\Controllers\Admin\IndexController::class)->name('admin.index');
Route::get('/admin/create', App\Http\Controllers\Admin\Create\CreateController::class)->name('admin.create');
Route::get('/admin/create/page', App\Http\Controllers\Admin\Create\IndexController::class)->name('admin.create.index');
Route::get('/admin/update', App\Http\Controllers\Admin\Update\UpdateController::class)->name('admin.update');
Route::get('/admin/update/page', App\Http\Controllers\Admin\Update\IndexController::class)->name('admin.update.index');
Route::get('/admin/delete', App\Http\Controllers\Admin\Delete\DeleteController::class)->name('admin.delete');
Route::get('/admin/delete/page', App\Http\Controllers\Admin\Delete\IndexController::class)->name('admin.delete.index');
