<?php

use App\Http\Controllers\EntregaController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MaterialeController;
use App\Http\Controllers\OrdeneController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('material', [MaterialeController::class, 'show'])->name('materiales.mostrar');

Route::resource('materiales', MaterialeController::class);
Route::resource('usuarios', UserController::class);

Route::get('stock/{materiale}', [StockController::class, 'index2'])->name('stock.index2');
Route::resource('stock', StockController::class);


Route::get('entregas', [EntregaController::class, 'mostrar'])->name('entregas.mostrar');


Route::resource('entrega', EntregaController::class);
Route::get('inventario', [InventarioController::class, 'total'])->name('inventario.total');
Route::resource('ordenes', OrdeneController::class);
