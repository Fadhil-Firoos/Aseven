<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Middleware\superadmin;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Passwords\Confirm;
use App\Livewire\Auth\Passwords\Email;
use App\Livewire\Auth\Passwords\Reset;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Verify;
use App\Livewire\SuperAdmin\Permission\CreatePermission;
use App\Livewire\SuperAdmin\Permission\EditPermission;
use App\Livewire\SuperAdmin\Permission\KelolaPermission;
use App\Livewire\SuperAdmin\Permission\ShowPermission;
use Illuminate\Support\Facades\Route;

// livewire Super Admin
    // Kelola User
    use App\Livewire\SuperAdmin\User\EditUser;
    use App\Livewire\SuperAdmin\User\ShowUser;
    use App\Livewire\SuperAdmin\User\KelolaUser;
    use App\Livewire\SuperAdmin\User\CreateUser;

    //Product
    use App\Livewire\SuperAdmin\Product\Product;
use App\Livewire\SuperAdmin\Role\CreateRole;
use App\Livewire\SuperAdmin\Role\EditRole;
use App\Livewire\SuperAdmin\Role\KelolaRole;
use App\Livewire\SuperAdmin\Role\PermissionRole;
use App\Livewire\SuperAdmin\Role\ShowRole;

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

    // kelola product
    Route::get('product', Product::class)
    ->name('product');
    Route::get('kelola-user', KelolaUser::class)
    ->name('user.kelola-user');

    // kelola user
    Route::get('create-user', CreateUser::class)
    ->name('user.create-user');
    Route::get('user/show/{user}', ShowUser::class)
    ->name('user.show');
    Route::get('user/edit/{user}', EditUser::class)
    ->name('user.edit');

    // kelola permission
    Route::get('permission/kelola-permission', KelolaPermission::class)
    ->name('permission.kelola-permission');
    Route::get('permission/create-permission', CreatePermission::class)
    ->name('permission.create-permission');
    Route::get('permission/edit-permission/{permission}', EditPermission::class)
    ->name('permission.edit-permission');
    Route::get('permission/show-permission/{permission}', ShowPermission::class)
    ->name('permission.show-permission');

    // kelola role
    Route::get('role/kelola-role', KelolaRole::class)
    ->name('role.kelola-role');
    Route::get('role/create-role', CreateRole::class)
    ->name('role.create-role');
    Route::get('role/edit-role/{role}', EditRole::class)
    ->name('role.edit-role');
    Route::get('role/show-role/{role}', ShowRole::class)
    ->name('role.show-role');
    Route::get('role/permission-role/{role}', PermissionRole::class)
    ->name('role.permission-role');

});

Route::get('logout', LogoutController::class)
->name('logout');
