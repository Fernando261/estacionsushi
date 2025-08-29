<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\AdminAuthController;

// Rutas públicas
Route::get('/', [MenuController::class, 'index'])->name('menu.index');

// Login admin (fuera del middleware)
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Rutas admin protegidas
Route::prefix('admin')->name('admin.')->middleware('adminauth')->group(function () {
    Route::resource('menu', AdminMenuController::class);
});
