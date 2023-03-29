<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [CustomerController::class, 'index']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/store', [UserController::class, 'store']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('delete/{id}', [CustomerController::class,'delete'])->middleware('auth');
Route::get('addCustomer', [CustomerController::class, 'addCustomer']);
Route::post('updateCustomer', [CustomerController::class, 'updateCustomer']);
Route::get('edit/{id}', [CustomerController::class,'edit']);




Route::get('/products', [ProductController::class, 'index']);
Route::get('deleteProd/{prodID}', [ProductController::class,'delete']);
Route::get('addProduct', [ProductController::class, 'addProduct']);
Route::post('updateProduct', [ProductController::class, 'updateProduct']);
Route::get('editProduct/{prodID}', [ProductController::class, 'editProduct']);


