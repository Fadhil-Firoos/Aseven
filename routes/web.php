<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Middleware\superadmin;
use App\Livewire\Auth\Login;
use App\Livewire\Product;
use App\Livewire\KelolaUser;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
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

Route::middleware('guest')->group(function () {
    Route::get('/', Login::class)
    ->name('login');

    // Route::get('register', Register::class)
    //     ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');



// Route::get('password/reset/{token}', Reset::class)
//     ->name('password.reset');

// Route::middleware('auth')->group(function () {
//     Route::get('email/verify', Verify::class)
//         ->middleware('throttle:6,1')
//         ->name('verification.notice');

//     Route::get('password/confirm', Confirm::class)
//         ->name('password.confirm');
// });

Route::middleware([superadmin::class])->name('superadmin.')->prefix('superadmin')->group(function () {
    Route::get('product', Product::class)
    ->name('product');
    Route::get('kelola-user', KelolaUser::class)
    ->name('kelola-user');

});

Route::get('logout', LogoutController::class)
->name('logout');
