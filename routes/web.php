<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClinicController;
use App\Http\Controllers\Admin\MajorController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserAppointmentController;
use App\Models\Website\Clinic;
use App\Models\Website\Doctor;
use Illuminate\Support\Facades\Auth;
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
    return view('website/welcome');
})->name('main-page');

Route::get('/appointments', [UserAppointmentController::class, 'index'])->name('appointment');

Route::get('/appointments/doctor', [UserAppointmentController::class, 'getDoctorClinic'])->name('getDoctorClinic');


//START Admin AREA
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::get('/loginDash', [AdminController::class, 'adminForm'])->name('adminForm');
//Group
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth:admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    //    Users
    Route::get('/users', [UserController::class, 'userIndex'])->name('users');
    Route::get('/doctors', [UserController::class, 'doctorIndex'])->name('doctors');
    Route::get('/admins', [UserController::class, 'adminIndex'])->name('admins');

    //    Clinics
    Route::group(['prefix' => 'clinic', 'as' => 'clinic.'], function () {
        Route::get('/eyes', [ClinicController::class, 'eyesIndex'])->name('eyes');
        Route::get('/dermatology', [ClinicController::class, 'dermatologyIndex'])->name('dermatology');
        Route::get('/dentist', [ClinicController::class, 'dentistIndex'])->name('dentist');
        Route::get('/beauty', [ClinicController::class, 'beautyIndex'])->name('beauty');
    });
    Route::get('appointments', [AppointmentController::class, 'index'])->name('appointment');
    Route::get('majors', [MajorController::class, 'index'])->name('major');
});
//END Admin AREA

    // START User AREA
Route::post('/newAppointment', [UserAppointmentController::class, 'store'])->name('newAppointment');
    Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => 'auth:web'], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/info', [HomeController::class, 'info'])->name('info');
        Route::get('/updatePassword', [HomeController::class, 'updatePassword'])->name('updatePassword');
        Route::post('/update/{user}', [HomeController::class, 'update'])->name('update');
        Route::get('/appointments', [HomeController::class, 'appointments'])->name('appointments');
        Route::get('/edit/appointment/{id}', [HomeController::class, 'editAppointment'])->name('edit.appointment');
        Route::post('/update/appointment/{id}', [HomeController::class, 'updateAppointment'])->name('update.appointment');
        Route::post('/cancel/appointment/{id}', [HomeController::class, 'cancelAppointment'])->name('cancel.appointment');
        Route::get('/vaccinations', [HomeController::class, 'vaccinations'])->name('vaccinations');
        Route::get('/medications', [HomeController::class, 'medications'])->name('medications');
        Route::get('/medicalReport', [HomeController::class, 'medicalReport'])->name('medicalReport');
        Route::get('/xrayResults', [HomeController::class, 'xrayResults'])->name('xrayResults');
        Route::get('/contactUs', [HomeController::class, 'contactUs'])->name('contactUs');
        Route::get('/doneAppointments', [HomeController::class, 'doneAppointments'])->name('doneAppointments');
    });
//END USER AREA


// Doctor AREA
//    Auth
Route::get('/doctorLoginDash', [DoctorController::class, 'loginForm'])->name('doctor.loginDash');
Route::post('/doctor/logout', [DoctorController::class, 'logout'])->name('doctor.logout');
Route::post('/doctor/login', [DoctorController::class, 'login'])->name('doctor.login');
//        GROUP
Route::group(['prefix' => 'doctor', 'as' => 'doctor.', 'middleware' => 'auth:doctor'], function () {
    Route::get('/', [DoctorController::class, 'index'])->name('home');
    //    Appointment
    Route::group(['prefix' => 'appointment', 'as' => 'appointment.'], function () {
        Route::get('/booked', [DoctorController::class, 'booked'])->name('booked');
        Route::get('/done', [DoctorController::class, 'done'])->name('done');
        Route::get('/canceled', [DoctorController::class, 'canceled'])->name('canceled');
    });
    //    Other
    Route::get('getDoctors', [DoctorController::class, 'getDoctors'])->name('getDoctors');
    Route::get('getAdmins', [DoctorController::class, 'getAdmins'])->name('getAdmins');
});



Auth::routes();
