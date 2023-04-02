<?php
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ProductoController::class, 'index'])->name('productos.index');
Route::post('/actualizar', [ProductoController::class, 'actualizarProducto'])->name('actualizarProducto');
Route::delete('/eliminar', [ProductoController::class, 'eliminarProducto'])->name('eliminarProducto');
Route::post('/agregar', [ProductoController::class, 'agregarProducto'])->name('agregarProducto');

