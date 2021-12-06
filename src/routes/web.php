<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckController;
use App\Http\Controllers\DomainController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', [
    DashboardController::class, 'index'
])->name('home');

Route::get('domain/create', [
    DomainController::class, 'create'
])->name('domain.create');

Route::post('domain/store', [
    DomainController::class, 'store'
])->name('domain.store');

Route::get('domain/destroy/{domain}', [
    DomainController::class, 'destroy'
])->name('domain.destroy');

Route::get('check/all', [
    CheckController::class, 'all'
])->name('check.all');

Route::get('check/{domain}', [
    CheckController::class, 'domain'
])->name('check.domain');