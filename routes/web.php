<?php

use App\Http\Controllers\AuthController;
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
    return view('welcome');
})->name('dashboard');

Route::controller(AuthController::class)->group(function() {
    Route::get('/login', 'login')->middleware('guest')->name('auth.login');
    Route::post('/postlogin', 'postlogin')->middleware('guest')->name('auth.postlogin');
    Route::get('/register', 'register')->middleware('guest')->name('auth.register');
    Route::get('/logout', 'logout')->middleware('auth')->name('auth.logout');
});
