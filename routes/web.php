<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
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

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create'])->name(
        'login'
    );

    Route::post('/', [AuthenticatedSessionController::class, 'store']);

    Route::get('register', [RegisteredUserController::class, 'create'])->name(
        'register'
    );

    Route::post('register', [RegisteredUserController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [
        AuthenticatedSessionController::class,
        'destroy',
    ])->name('logout');

    Route::get('/admin', function () {
        return view('admin/dashboard');
    });
});
