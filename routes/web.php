<?php

use App\Http\Controllers\Area1Controller;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\imgObController;
use App\Http\Controllers\list_obController;
use App\Http\Controllers\ListTugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\zona_obController;
use App\Models\ListTugas;
use App\Models\zona_ob;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('welcome', function () {
    return view('welcome');
});



Route::get('/', [LoginController::class, 'showLogin'])->name('login');
Route::post('/', [LoginController::class, 'login']);


// Role views
Route::middleware(['auth', 'checkrole:admin'])->get('/dashboard', function () {
    return view('dashboard');
});

Route::middleware(['auth', 'checkrole:user'])->get('/tugas', function () {
    return view('tugas.index');
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

// Route::get(
//     'tugas',
//     [ListTugasController::class, 'index']
// )->name('tugas');

Route::resource('area', AreaController::class);
Route::get('/ListTugas/{areas_id}', [ListTugasController::class, 'index']
)->name('ListTugas');
Route::post('/ListTugas/create/{areas_id}', [ListTugasController::class, 'create']
)->name('ListTugas');
Route::resource('ListTugas', ListTugasController::class);
Route::resource('zonaOB', zona_obController::class);
Route::get('/ListOB/{zona_ob_id}', [list_obController::class, 'index']
)->name('ListOB');
Route::resource('ListOB', list_obController::class);
Route::resource('imgOB', imgObController::class);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
