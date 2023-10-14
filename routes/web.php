<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'welcome'])->middleware('startpoint')->name('welcome');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
    Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
    Route::post('/email', [LandingController::class, 'store'])->name('landing.store');
});


Route::middleware(['auth'])->group(function () {

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/home', [AdminController::class, 'home'])->name('admin.home');
        Route::get('/admin/all_demandes', [AdminController::class, 'all_demandes'])->name('admin.all_demandes');
    });

    Route::middleware(['user'])->group(function () {
        Route::get('/client/home', [ClientController::class, 'home'])->name('client.home');
        Route::get('/client/demande', [ClientController::class, 'demande'])->name('client.demande');
    });

    Route::middleware(['manager'])->group(function () {
        Route::get('/manager/home', [ManagerController::class, 'home'])->name('manager.home');
        Route::get('/manager/demande', [ManagerController::class, 'demande'])->name('manager.demande');
    });

    //Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

});