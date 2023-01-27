<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|





*/Route::middleware(['web'])->group(function () {
    Route::get('/items', [ItemController::class, 'index'])->name('items.index');
    Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
    Route::post('/items', [ItemController::class, 'store'])->name('items.store');
    Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');
    Route::get('/items/{item}/edit', [ItemController::class, 'edit'])->name('items.edit')->middleware('guard');
    Route::put('/items/{item}', [ItemController::class, 'update'])->name('items.update');
    Route::delete('/items/{item}', [ItemController::class, 'destroy'])->name('items.destroy');

    Route::get('/items', [ItemController::class, 'index'])->name('items.index');
    Route::get('/items/create',[ItemController::class,'create'])->name('items.create');
    Route::post('/items',[ItemController::class,'store'])->name('items.store');
    Route::get(
        '/no-access',
        function () {
            echo "Not allowed to access the page";
            die;
    }
    );
});

Route::get('/login', [ProductController::class, 'index'])->name('auth.index');
Route::post('/login/auth', [ProductController::class, 'login'])->name('auth.login');
Route::get('/dashboard', [ProductController::class, 'home'])->name('auth.home');



Route::get('/company', [CompanyController::class, 'index'])->name('company.index');
Route::get('/company/create', [CompanyController::class, 'create'])->name('company.create');
Route::post('/company/store', [CompanyController::class, 'store'])->name('company.store');
Route::get('/company/{id}', [CompanyController::class,'show'])->name('company.show');
Route::delete('/company/delete/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');
Route::get('/company/edit/{id}', [CompanyController::class, 'edit'])->name('company.edit');
Route::put('/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');



Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{id}', [EmployeeController::class,'show'])->name('employee.show');
Route::delete('/employee/delete/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
