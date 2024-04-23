<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\DashboardController;
use App\Http\controllers\PatientController;
use App\Http\controllers\UserController;
use App\Http\controllers\ExamController;

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

Route::prefix('/dashboards')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboards-index');
});

Route::prefix('/patients')->group(function() {
    Route::get('/', [patientController::class, 'index'])->name('patients-index');
    Route::get('/create', [PatientController::class, 'create'])->name('patients-create');
    Route::post('/', [PatientController::class, 'store'])->name('patients-store');
    Route::get('/{id}edit', [PatientController::class, 'edit'])->where('id', '[0-9]+')->name('patients-edit');
    Route::put('/{id}', [PatientController::class, 'update'])->where('id', '[0-9]+')->name('patients-update');
});

Route::prefix('/users')->group(function() {
    Route::get('/', [UserController::class, 'index'])->name('users-index');
    Route::get('/create', [UserController::class, 'create'])->name('users-create');
    Route::post('/', [UserController::class, 'store'])->name('users-store');
    Route::get('/{id}edit', [UserController::class, 'edit'])->where('id', '[0-9]+')->name('users-edit');
    Route::put('/{id}', [UserController::class, 'update'])->where('id', '[0-9]+')->name('users-update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->where('id', '[0-9]+')->name('users-destroy');
});

Route::prefix('/exams')->group(function() {
    Route::get('/', [ExamController::class, 'index'])->name('exams-index');
    Route::get('/create', [ExamController::class, 'create'])->name('exams-create');
    Route::post('/', [ExamController::class, 'store'])->name('exams-store');
});