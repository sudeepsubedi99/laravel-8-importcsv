<?php

use App\Http\Controllers\EmployeeControllerelr;
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

Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');

Route::middleware('auth')->group(function () {
    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});

Route::post('/import_parse', [\App\Http\Controllers\ImportController::class, 'parseImport'])->name('import_parse');
Route::post('/import_process', [\App\Http\Controllers\ImportController::class, 'processImport'])->name('import_process');


Route::get('/admin/employee', [\App\Http\Controllers\EmployeeControllerelr::class, 'index'])->name('employees.index');
Route::get('/admin/employee/create', [\App\Http\Controllers\EmployeeControllerelr::class, 'create'])->name('employees.create');
Route::post('/admin/employee', [\App\Http\Controllers\EmployeeControllerelr::class, 'store'])->name('employees.store');
Route::get('/admin/employee/{employee}/edit', [\App\Http\Controllers\EmployeeControllerelr::class, 'edit'])->name('employees.edit');
Route::put('/admin/employee/{employee}', [\App\Http\Controllers\EmployeeControllerelr::class, 'update'])->name('employees.update');
Route::get('/admin/employee/{employee}', [\App\Http\Controllers\EmployeeControllerelr::class, 'show'])->name('employees.show');
Route::delete('/admin/employee/{employee}', [EmployeeControllerelr::class, 'destroy'])->name('employees.destroy');



require __DIR__ . '/auth.php';
