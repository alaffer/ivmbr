<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepotController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BankImportController;
use App\Filament\Resources\BookingResource\Pages\ListBookings;
use App\Http\Livewire\BankImport;

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
Route::get('booking-export', [BookingController::class, 'bookingExport'])->name('booking-export');
Route::get('bookingview-export', [BookingController::class, 'bookingViewExport'])->name('bookingview-export');
Route::get('list-bookings-export', [ListBookings::class, 'export'])->name('list-bookings-export');

//Route::post('bank-data-import', [BankImportController::class, 'postImport'])->name('bank-data-import');
//Route::get('/bank', BankImport::class)->name('bank.import');
//Route::get('csvdata-import', [BankImportController::class, 'Import'])->name('csvdata-import');