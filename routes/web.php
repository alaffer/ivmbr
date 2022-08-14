<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\CategoryController;

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

Route::redirect('/login', '/br/login', 301)->name('login');
Route::get('depot-export', [DepotController::class, 'depotExport'])->name('depot-export');
Route::get('category-export', [CategoryController::class, 'categoryExport'])->name('category-export');