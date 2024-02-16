<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\SignUpController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockInController;
use App\Http\Controllers\StockOutController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UnitController;
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

// Route::get('/' , [HomeController::class ,  'index']);
Route::get('' , [LoginController::class , 'index'])->name('login.index');
Route::post('/customLogin' , [LoginController::class , 'login'])->name('login.customLogin');
Route::get('/logout' , [LoginController::class , 'logout'])->name('logout');



Route::get('/signup' , [SignUpController::class , 'index'])->name('signup.index');
Route::post('/signup/store' , [SignUpController::class , 'store'])->name('signup.store');

Route::get('/products' ,  [ProductController::class , 'index'])->name('products.index');
Route::post('/products/store' ,  [ProductController::class , 'store'])->name('products.store');
Route::get('/products/create' ,  [ProductController::class , 'create'])->name('products.create');
Route::post('/products/update/{id}' ,  [ProductController::class , 'update'])->name('products.update');
Route::get('/products/edit/{id}' ,  [ProductController::class , 'show'])->name('products.edit');
Route::get('/products/delete/{id}' ,  [ProductController::class , 'destroy'])->name('products.delete');
Route::get('/producsts/generatePDf' , [ProductController::class , 'generatePdf'])->name('products.generatePdf');


Route::get('/stocks/in', [StockInController::class ,'index'])->name('stockin.index');
Route::get('/stocks/create', [StockInController::class ,'create'])->name('stockin.create');
Route::post('/stocks/in/updateStock', [StockInController::class ,'addStock'])->name('stockin.addStock');





Route::get('/suppliers' , [SupplierController::class , 'index'])->name('suppliers.index');
Route::get('/suppliers/create' , [SupplierController::class , 'create'])->name('suppliers.create');
Route::post('/suppliers/store' , [SupplierController::class , 'store'])->name('suppliers.store');
Route::get('/suppliers/edit/{id}' , [SupplierController::class , 'store'])->name('suppliers.edit');
Route::post('/suppliers/update/{id}' , [SupplierController::class , 'update'])->name('suppliers.update');
Route::get('/suppliers/delete/{id}' , [SupplierController::class , 'destroy'])->name('suppliers.delete');

Route::get('/customers' , [CustomerController::class , 'index'])->name('customers.index');
Route::get('/customers/create' , [CustomerController::class , 'create'])->name('customers.create');
Route::post('/customers/store' , [CustomerController::class , 'store'])->name('customers.store');
Route::get('/customers/edit/{id}' , [CustomerController::class , 'store'])->name('customers.edit');
Route::post('/customers/update/{id}' , [CustomerController::class , 'update'])->name('customers.update');
Route::get('/customers/delete/{id}' , [CustomerController::class , 'destroy'])->name('customers.delete');

Route::get('/units' , [UnitController::class , 'index'])->name('units.index');
Route::get('/units/create' , [UnitController::class , 'create'])->name('units.create');
Route::post('/units/store' , [UnitController::class , 'store'])->name('units.store');


Route::get('/cashier' , [CashierController::class , 'index'])->name('cashier.index');
Route::post('/cashier/sales' , [CashierController::class , 'sales'])->name('cashier.sales');
Route::get('/cashier/close' , [CashierController::class , 'closeCashier'])->name('cashier.close');