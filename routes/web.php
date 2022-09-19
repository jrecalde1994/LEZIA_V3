<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('sucursales', App\Http\Controllers\SucursaleController::class);


Route::resource('ciudads', App\Http\Controllers\ciudadController::class);


Route::resource('cajas', App\Http\Controllers\cajaController::class);


Route::resource('logins', App\Http\Controllers\loginController::class);


Route::resource('clientes', App\Http\Controllers\clienteController::class);


Route::resource('direccions', App\Http\Controllers\direccionController::class);


Route::resource('repartidors', App\Http\Controllers\repartidorController::class);


Route::resource('proveedors', App\Http\Controllers\proveedorController::class);


Route::resource('timbrados', App\Http\Controllers\timbradoController::class);


Route::resource('compras', App\Http\Controllers\compraController::class);


Route::resource('detalleCompras', App\Http\Controllers\detalle_compraController::class);


Route::resource('fotos', App\Http\Controllers\fotoController::class);


Route::resource('productos', App\Http\Controllers\productoController::class);


Route::resource('stocks', App\Http\Controllers\stockController::class);


Route::resource('categorias', App\Http\Controllers\categoriaController::class);


Route::resource('carritos', App\Http\Controllers\carritoController::class);


Route::resource('ventas', App\Http\Controllers\ventaController::class);


Route::resource('entregas', App\Http\Controllers\entregaController::class);


Route::resource('envios', App\Http\Controllers\envioController::class);


Route::resource('vendedors', App\Http\Controllers\vendedorController::class);


Route::resource('depositos', App\Http\Controllers\depositoController::class);


Route::resource('ajustes', App\Http\Controllers\ajusteController::class);


Route::resource('motivoAjustes', App\Http\Controllers\motivo_ajusteController::class);
