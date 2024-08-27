<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('datatable', function () {
    return view('contents.backend.admin.product.datatable');
})->name('/');

Route::get('local/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('local.product.index');
Route::get('local/product/show/{id}', [\App\Http\Controllers\ProductController::class, 'show']);


Route::get('web/products', [\App\Http\Controllers\ProductController::class, 'indexweb'])->name('web.product.index');
Route::get('web/product/show/{id}', [\App\Http\Controllers\ProductController::class, 'show']);


Route::get('home', function () {
    return view('contents.backend.admin.home.main');
})->name('admin.home');


 