<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SupplierController;

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

Route::get('/', [DashboardController::class, 'index']);

//Employee Route
Route::prefix('employee')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'] );
    Route::get('/add', [EmployeeController::class, 'create']);
    Route::get('/delete/{id}', [EmployeeController::class, 'destroy']);
    Route::get('/search',[EmployeeController::class,'search']);
    Route::get('/edit/{id}', [EmployeeController::class, 'edit']);
    Route::get('/export-pdf', [EmployeeController::class, 'pdf']);
    Route::get('/export-excel', [EmployeeController::class, 'excel']);
    Route::get('/{id}', [EmployeeController::class, 'show']);
    Route::Post('/store', [EmployeeController::class, 'store']);
    Route::Post('/edit/{id}', [EmployeeController::class, 'update']);
});

//Category Route
Route::prefix('category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/add', [CategoryController::class, 'create']);
    Route::get('/delete/{id}', [CategoryController::class, 'destroy']);
    Route::get('/edit/{id}', [CategoryController::class, 'edit']);
    //Route::get('/{id}', [CategoryController::class, 'show']);
    Route::Post('/store', [CategoryController::class, 'store']);
    Route::Post('/edit/{id}', [CategoryController::class, 'update']);
});

//Supplier Route
Route::prefix('supplier')->group(function () {
    Route::get('/', [SupplierController::class, 'index']);
    Route::get('/add', [SupplierController::class, 'create']);
    Route::get('/export-pdf', [SupplierController::class, 'pdf']);
    Route::get('/export-excel', [SupplierController::class, 'excel']);
    Route::get('/delete/{id}', [SupplierController::class, 'destroy']);
    Route::get('/edit/{id}', [SupplierController::class, 'edit']);
    //Route::get('/{id}', [SupplierController::class, 'show']);
    Route::Post('/store', [SupplierController::class, 'store']);
    Route::Post('/edit/{id}', [SupplierController::class, 'update']);
});

//Product Route
Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/add', [ProductController::class, 'create']);
    Route::get('/export-pdf', [ProductController::class, 'pdf']);
    Route::get('/export-excel', [ProductController::class, 'excel']);
    Route::get('/delete/{id}', [ProductController::class, 'destroy']);
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
Route::post('/logout', [LoginController::class, 'logout']);
