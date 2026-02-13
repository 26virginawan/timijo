<?php

use App\Http\Controllers\Area1Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::view('admin/user/index', 'admin.user.index')->name('admin.user.index');

Route::get(
    'dashboard',
    [DashboardController::class, 'index']
)->name('dashboard');

Route::get(
    'user',
    [UserController::class, 'index']
)->name('user');

Route::get(
    'tugas',
    [TugasController::class, 'index']
)->name('tugas');

Route::get(
    'area1',
    [Area1Controller::class, 'index']
)->name('area1');
