<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('dashboard.user');
})->name('dashboard.user');

Route::get('/umkm', function () {
    return view('dashboard.umkm');
})->name('dashboard.umkm');

Route::get('/admin', function () {
    return view('dashboard.admin');
})->name('dashboard.admin');

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'login')->middleware('guest')->name('auth.login');
    Route::post('/postlogin', 'postlogin')->middleware('guest')->name('auth.postlogin');
    Route::get('/register', 'register')->middleware('guest')->name('auth.register');
    Route::post('/postregis', 'postregis')->middleware('guest')->name('auth.postregis');
    Route::get('/logout', 'logout')->middleware('auth')->name('auth.logout');
});

Route::controller(CategoryController::class)->group(function() {
    Route::get('/category', 'index')->middleware('can:isAdmin')->name('category.index');
    Route::get('/category/create', 'create')->middleware('can:isAdmin')->name('category.create');
    Route::post('/category/store', 'store')->middleware('can:isAdmin')->name('category.store');
});
