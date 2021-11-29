<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;
use App\Models\Employee;

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

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

//Employee Route
Route::group(["prefix"=>"employee", "middleware"=>"auth"], function () {
    Route::get('/', [EmployeeController::class, 'index'] );
    Route::get('/add', [EmployeeController::class, 'create']);
    Route::get('/delete/{id}', [EmployeeController::class, 'destroy']);
    Route::get('/search',[EmployeeController::class,'search']);
    Route::get('/edit/{id}', [EmployeeController::class, 'edit']);
    Route::get('/export-pdf', [EmployeeController::class, 'pdf'])->name('pdf-employee');
    Route::get('/export-excel', [EmployeeController::class, 'excel'])->name('excel-employee');
    Route::get('/export-slip/{id}', [EmployeeController::class, 'salary'])->name('pdf-slip');
    Route::get('/{id}', [EmployeeController::class, 'show']);
    Route::Post('/store', [EmployeeController::class, 'store']);
    Route::Post('/edit/{id}', [EmployeeController::class, 'update']);
});

//Category Route
Route::group(["prefix"=>"category", "middleware"=>"auth"], function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/add', [CategoryController::class, 'create']);
    Route::get('/delete/{id}', [CategoryController::class, 'destroy']);
    Route::get('/edit/{id}', [CategoryController::class, 'edit']);
    //Route::get('/{id}', [CategoryController::class, 'show']);
    Route::Post('/store', [CategoryController::class, 'store']);
    Route::Post('/edit/{id}', [CategoryController::class, 'update']);
});

//Supplier Route
Route::group(["prefix"=>"supplier", "middleware"=>"auth"], function () {
    Route::get('/', [SupplierController::class, 'index']);
    Route::get('/add', [SupplierController::class, 'create']);
    Route::get('/export-pdf', [SupplierController::class, 'pdf'])->name('pdf-supplier');
    Route::get('/export-excel', [SupplierController::class, 'excel'])->name('excel-supplier');
    Route::get('/delete/{id}', [SupplierController::class, 'destroy']);
    Route::get('/search',[SupplierController::class,'search']);
    Route::get('/edit/{id}', [SupplierController::class, 'edit']);
    //Route::get('/{id}', [SupplierController::class, 'show']);
    Route::Post('/store', [SupplierController::class, 'store']);
    Route::Post('/edit/{id}', [SupplierController::class, 'update']);
});

//Product Route
Route::group(["prefix"=>"product", "middleware"=>"auth"], function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/add', [ProductController::class, 'create']);
    Route::get('/export-pdf', [ProductController::class, 'pdf'])->name('pdf-product');
    Route::get('/export-excel', [ProductController::class, 'excel'])->name('excel-product');
    Route::get('/delete/{id}', [ProductController::class, 'destroy']);
    Route::get('/search',[ProductController::class,'search']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::Post('/store', [ProductController::class, 'store']);
    Route::Post('/edit/{id}', [ProductController::class, 'update']);
});

// Register route
Route::prefix('register')->group(function () {
    Route::get('/', [RegisterController::class, 'index']);
    Route::post('/', [RegisterController::class, 'store']); 
});

// Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
