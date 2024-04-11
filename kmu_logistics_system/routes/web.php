<?php

use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DriverOfficerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Auth::routes();

Route::get('/adminHome', [HomeController::class, 'adminHome'])->name('adminHome');
Route::get('/studentHome', [HomeController::class, 'studentHome'])->name('studentHome');
Route::get('/driverHome', [HomeController::class, 'driverHome'])->name('driverHome');
Route::get('Driverofficer/bookings', [DriverOfficerController::class, 'bookings'])->name('bookings');
Route::get('Driverofficer/setTrips', [DriverOfficerController::class, 'setTrips'])->name('setTrips');
Route::get('Driverofficer/controlSeats', [DriverOfficerController::class, 'controlSeats'])->name('controlSeats');
Route::get('Driverofficer/bookingList', [DriverOfficerController::class, 'bookingList'])->name('bookingList');
Route::post('/setTrips', [DriverOfficerController::class, 'createTrips']);
Route::post('/controlSeats', [DriverOfficerController::class, 'update']);




require __DIR__.'/auth.php';
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
