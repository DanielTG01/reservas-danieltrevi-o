<?php

use App\Http\Controllers\ReservasController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reserva',[ReservasController::class, 'index']) ->name('reserva.index');

Route::get('/reserva-report', [ReservasController::class, 'getReport'])->name('reserva.report');

Route::get('/reserva-create',  [ReservasController::class, 'create'])->name('reserva.create');

Route::post('/reserva', [ReservasController::class, 'store'])->name('reserva.store');

Route::get('/reserva-show/{product}',  [ReservasController::class, 'show'])->name('reserva.show');