<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// })->name('/');

Route::get('datatable', function () {
    return view('contents.backend.admin.product.datatable');
})->name('/');

Route::get('local/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('local.product.index');
Route::get('async/products', [\App\Http\Controllers\ProductController::class, 'async'])->name('async.product.index');
Route::post('sync/product', [\App\Http\Controllers\ProductController::class, 'syncProduct']);

Route::get('local/products/json', [\App\Http\Controllers\ProductController::class, 'localjson']);

Route::get('local/product/show/{id}', [\App\Http\Controllers\ProductController::class, 'show']);
Route::get('web/products', [\App\Http\Controllers\ProductController::class, 'indexweb'])->name('web.product.index');

Route::get('home', [\App\Http\Controllers\ProductController::class, 'home'])->name('admin.home');
Route::get('/', [\App\Http\Controllers\ProductController::class, 'home'])->name('admin.home');

 