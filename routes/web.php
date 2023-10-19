<?php

use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HousingLevyController;
use App\Http\Controllers\NhifController;
use App\Http\Controllers\NhifReliefController;
use App\Http\Controllers\NssfController;
use App\Http\Controllers\PayeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ReliefController;
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

Route::resource('/employees', EmployeeController::class);
Route::resource('/department', DepartmentController::class);
Route::resource('nhif', NhifController::class);
Route::resource('nssf', NssfController::class);
Route::resource('levy', HousingLevyController::class);
Route::resource('paye', PayeController::class);
Route::resource('nhifrelief', NhifReliefController::class);
Route::resource('relief', ReliefController::class);
Route::resource('allowance', AllowanceController::class);

Route::get('calculator', [PayrollController::class, 'calculator'])->name('calculator');
