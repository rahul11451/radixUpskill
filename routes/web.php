<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;

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

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/registrationForm', 'register')->name('register');
    Route::post('/registrationForm', 'store')->name('store');
    Route::get('/', 'dashboard')->name('welcome');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authentication')->name('authentication');
    Route::post('/logout', 'logout')->name('logout');
});