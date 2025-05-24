<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListProdukController;


 
///Route::get('/welcome', function () {
    //return view('welcome');
 //});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/', function () {
    return view('pages.home');
});

//Route::get('/', function () {
//    return view('list_product');
//});



Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/list_product', [ProductController::class, 'index']);
Route::get('/list_product', [ListProdukController::class, 'show']);
//Route::view('/list_product', 'list_product')->name('list_product');
