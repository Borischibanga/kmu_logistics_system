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
// routes/web.php

// Routes for driver officers
Route::get('/driverofficer', 'DriverOfficerController@index')->name('DriverOfficer.driverofficer');

// Routes for students
Route::get('/student', 'StudentController@index')->name('Students.student');

// Routes for super admins
Route::get('/superadmin', 'SuperAdminController@index')->name('SuperAdmin.superAdmin');

