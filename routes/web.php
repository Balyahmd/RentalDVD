<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DvdController;
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


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(DvdController::class)->prefix('dvd')->group(function () {
        Route::get('', 'index')->name('dvd');
        Route::get('create', 'create')->name('dvd.create');
        Route::post('store', 'store')->name('dvd.store');
        Route::get('show/{id}', 'show')->name('dvd.show');
        Route::get('edit/{id}', 'edit')->name('dvd.edit');
        Route::put('edit/{id}', 'update')->name('dvd.update');
        Route::delete('destroy/{id}', 'destroy')->name('dvd.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
Route::resource('dvd', DvdController::class);
