<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('SuperAdmin/superAdmin', [App\Http\Controllers\HomeController::class, 'superAdmin'])->name('SuperAdmin.superAdmin');
Route::get('DriverOfficer/driverofficer', [App\Http\Controllers\HomeController::class, 'driverofficer'])->name('DriverOfficer.driverofficer');
Route::get('Students/student', [App\Http\Controllers\HomeController::class, 'student'])->name('Students.student');
