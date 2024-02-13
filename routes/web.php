<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SelectionController;
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

Route::get('/', [LoginController::class, 'LoginForm'])
->name('login.form');

Route::get('/selection', [SelectionController::class, 'SelectionPage'])
->name('selection.page');
Route::get('/dashboard', [DashboardController::class, 'AdminBoard'])
->name('dashboard.page');


