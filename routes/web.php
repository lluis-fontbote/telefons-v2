<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ReportController;
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


Route::get('/', [PhoneController::class, 'index'])->name('index');
Route::get('/telefon/{id}', [PhoneController::class, 'show'])->name('phone.show');
Route::post('/cercar-telefon', [PhoneController::class, 'search'])->name('phone.search');
Route::post('/denuncia-nou-telefon', [PhoneController::class, 'store'])->name('phone.store');

Route::post('/denuncia', [ReportController::class, 'store'])->name('report.store');