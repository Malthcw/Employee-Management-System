<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ChartController;


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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

Route::get('/', [HomeController::class, 'index'])->name('home');

});

require __DIR__.'/auth.php';

Route::get('/create-employee', [HomeController::class, 'create_emp']);
Route::get('/manage-employee', [HomeController::class, 'manage_emp']);

Route::get('/create-department', [HomeController::class, 'create_department']);
Route::get('/manage-department', [HomeController::class, 'manage_department']);

Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);


Route::get('/pie-chart-data', [ChartController::class, 'pieChart'])->name('pie.chart.data');