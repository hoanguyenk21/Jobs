<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

/**
 * Route general
 */
Route::get('dang-nhap', [HomeController::class, 'login'])->name('admin_login');
Route::get('dang-xuat', [HomeController::class, 'logout'])->name('admin_logout');
Route::get('doi-mat-khau', [HomeController::class, 'changePassword'])->name('admin_change_password');
Route::get('quen-mat-khau', [HomeController::class, 'forgotPassword'])->name('admin_forgot_assword');

Route::get('/', [HomeController::class, 'index'])->name('dashboard');
// Route::prefix('may-bay')->group(function () {
//     Route::get('/', [PlaneController::class, 'index'])->name('plane.index');
//     Route::get('them', [PlaneController::class, 'add'])->name('plane.add')->middleware('auth');
//     Route::post('them', [PlaneController::class, 'saveAdd'])->middleware('auth');
//     Route::get('sua/{id}', [PlaneController::class, 'edit'])->name('plane.edit')->middleware('auth');
//     Route::post('sua/{id}', [PlaneController::class, 'saveEdit'])->middleware('auth');
//     Route::get('xoa/{id}', [PlaneController::class, 'delete'])->name('plane.delete')->middleware('auth');
// });
