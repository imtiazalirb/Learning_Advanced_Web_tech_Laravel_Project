<?php

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('admin');
Route::get('/employee', [App\Http\Controllers\EmployeeController::class, 'index'])->name('employee')->middleware('employee');
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index'])->name('customer')->middleware('customer');
Route::get('/delivery', 'App\Http\Controllers\DeliveryController@index')->name('delivery')->middleware('delivery');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
