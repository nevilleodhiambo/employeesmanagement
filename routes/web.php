<?php

use App\Http\Controllers\AllowanceController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GiveallowanceController;
use App\Http\Controllers\HousingLevyController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\NhifController;
use App\Http\Controllers\NhifReliefController;
use App\Http\Controllers\NssfController;
use App\Http\Controllers\PayeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ReliefController;
use App\Http\Controllers\RolesController;
use App\Models\Employee;
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
    return view('auth.login');
});

Auth::routes();

Route::resource('/employees', EmployeeController::class);
Route::resource('/department', DepartmentController::class);
Route::resource('nhif', NhifController::class);
Route::resource('nssf', NssfController::class);
Route::resource('levy', HousingLevyController::class);
Route::resource('paye', PayeController::class);
Route::resource('nhifrelief', NhifReliefController::class);
Route::resource('relief', ReliefController::class);
Route::resource('allowance', AllowanceController::class);
Route::resource('giveallowance', GiveallowanceController::class);

Route::get('/attendance', [AttendanceController::class, 'index']);
Route::post('/attendance', [AttendanceController::class, 'store']);
// Route::resource('attendance', AttendanceController::class);
// Route::resource('leave', LeaveController::class);
Route::resource('roles', RolesController::class);

Route::get('calculator', [PayrollController::class, 'calculator'])->name('calculator');
Route::get('display', [PayrollController::class, 'display'])->name('display');
Route::get('emp-pdf', [PdfController::class, 'employees'])->name('employees.pdf');
Route::get('emp-payslip', [PdfController::class, 'payslip'])->name('payslip.pdf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// });
