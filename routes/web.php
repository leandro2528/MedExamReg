<?php

use Illuminate\Support\Facades\Route;

use App\Http\controllers\DashboardController;
use App\Http\controllers\PatientController;

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
});