<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\TableController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Halaman Depan
Route::get('/', [PPDBController::class, 'index'])->name('home');

// PPDB Form
Route::get('ppdb_form', [PPDBController::class, 'create'])->name('formulir');

// PPDB Form Submit
Route::post('post_form', [PPDBController::class, 'store'])->name('post_form');

// Admin
Route::prefix('admin')
->namespace('Admin')
->middleware(['auth', 'admin'])
->group(function() {

  Route::get('/', [AdminController::class, 'index'])->name('dashboard');

  Route::get('/table', [TableController::class, 'index'])->name('table');
});

Auth::routes();
