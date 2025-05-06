<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;


 
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



Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);