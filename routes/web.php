<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UmkmController;
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
    Route::get('/category/edit/{category_id}', 'edit')->middleware('can:isAdmin')->name('category.edit');
    Route::post('/category/update/{category_id}', 'update')->middleware('can:isAdmin')->name('category.update');
    Route::get('/category/destroy/{category_id}', 'destroy')->middleware('can:isAdmin')->name('category.destroy');
});

Route::controller(UmkmController::class)->group(function() {
    // dashboard
    Route::get('/umkm/{umkm_id}', 'dashboard')->middleware('auth')->name('dashboard.umkm');

    Route::get('/umkm/regis', 'regisUmkm')->middleware('guest')->name('umkm.regis');
});

Route::controller(PromoController::class)->group(function() {
    Route::get('/promo', 'index')->middleware('auth')->name('promo.index');
    Route::get('/promo/create', 'create')->middleware('auth')->name('promo.create');
});
