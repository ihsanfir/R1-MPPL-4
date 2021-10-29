<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

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
Route::get('employee', [EmployeeController::class, 'index'] );
Route::get('employee/add', [EmployeeController::class, 'create']);
Route::get('employee/delete/{id}', [EmployeeController::class, 'destroy']);
Route::get('employee/search',[EmployeeController::class,'search']);
Route::get('employee/edit/{id}', [EmployeeController::class, 'edit']);
Route::get('employee/{id}', [EmployeeController::class, 'show']);
Route::Post('employee/store', [EmployeeController::class, 'store']);
Route::Post('employee/edit/{id}', [EmployeeController::class, 'update']);

//Category Route
Route::get('category', [CategoryController::class, 'index']);
Route::get('category/add', [CategoryController::class, 'create']);
Route::get('category/delete/{id}', [CategoryController::class, 'destroy']);
Route::get('category/edit/{id}', [CategoryController::class, 'edit']);
//Route::get('category/{id}', [CategoryController::class, 'show']);
Route::Post('category/store', [CategoryController::class, 'store']);
Route::Post('category/edit/{id}', [CategoryController::class, 'update']);

// Register route
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

// Login Route
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
