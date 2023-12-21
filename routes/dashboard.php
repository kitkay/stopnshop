<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProducController;

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

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])
    ->group(function () {
        //Dashboard Routes
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'dashboard')->name('dashboard');
            Route::get('/inventory', 'inventory')->name('inventory');
            Route::get('/products', 'products')->name('products');
            Route::get('/reports', 'reports')->name('reports');
            Route::get('/sales', 'sales')->name('sales');
            Route::get('/staffs', 'staffs')->name('staffs');
        });

        //Products page routes
        Route::controller(ProducController::class)->group(function () {
            Route::get('/products', 'index')->name('products');
        });
    });