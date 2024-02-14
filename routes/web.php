<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SelectionController;
use App\Http\Middleware\Access;
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

Route::prefix('login')->group(function(){
    Route::get('/', [LoginController::class, 'LoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'register'])->name('register');
});

Route::get('selection', [SelectionController::class, 'SelectionPage'])
->name('selection.page');
Route::middleware(['auth'])
    ->group(function () {
    Route::prefix('dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'AdminBoard'])->name('adminboard');
        Route::get('/addboard', [DashboardController::class, 'add'])->name('adminadd');
        Route::post('/save',[DashboardController::class, 'save'])->name('adminsave');
    });
    Route::prefix('kondisi')->group(function(){
        Route::get('/', [KondisiController::class, 'jenis'])->name('jenis');
    });    
});


