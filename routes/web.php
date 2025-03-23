<?php

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

use App\Http\Controllers\VehicleController;

Route::get('vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
Route::get('vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
Route::post('vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('vehicles/{id}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::get('vehicles/{id}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
Route::put('vehicles/{id}', [VehicleController::class, 'update'])->name('vehicles.update');
Route::delete('vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

