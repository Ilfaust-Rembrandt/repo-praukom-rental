<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KondisiController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\ServisController;
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

Route::get('/login', [LoginController::class, 'LoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'proses'])->name('proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('prosreg');
Route::get('/register', [LoginController::class, 'RegisForm'])->name('register');

Route::get('/', [SelectionController::class, 'SelectionPage'])->name('selection.page');
Route::get('/info/{id}', [SelectionController::class, 'SelectionInfo'])->name('info');

Route::middleware(['auth'])
    ->group(function () {
    Route::prefix('dashboard')->group(function(){
        Route::get('/', [DashboardController::class, 'AdminBoard'])->name('adminboard');
        Route::get('/addboard', [DashboardController::class, 'Add'])->name('adminadd');
        Route::post('/save',[DashboardController::class, 'Save'])->name('adminsave');
        Route::get('/edit/{id}',[DashboardController::class, 'Edit'])->name('adminedit');
        Route::post('/edit/save',[DashboardController::class, 'Update'])->name('adminupdate');
        Route::delete('/hapus',[DashboardController::class, 'Delete'])->name('admindelete');
        Route::get('/servis', [DashboardController::class, 'ServisBoard'])->name('servisboard');
        Route::get('/addvis', [DashboardController::class, 'Addvis'])->name('addvis');
        Route::post('/savis', [DashboardController::class, 'Savis'])->name('savis');
        Route::get('/logs', [DashboardController::class, 'Logs'])->name('logs');
    });    
});


