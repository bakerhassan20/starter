<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers;

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

Route::get('/', function () {return view('auth.login');});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('Product', 'App\Http\Controllers\ProductsController');

Route::get('/change_password','App\Http\Controllers\ChangePassswordController@change_password');

Route::post('/update_password','App\Http\Controllers\ChangePassswordController@update_password')->name('update_password');

Route::get('/system','App\Http\Controllers\SystemController@system');

Route::resource('Voucher', 'App\Http\Controllers\VoucherController');

Route::post('createVoucher', 'App\Http\Controllers\VoucherController@create');

Route::get('/{page}', 'App\Http\Controllers\AdminController@index');