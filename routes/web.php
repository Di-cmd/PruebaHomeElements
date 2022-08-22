<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//controladores
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;



Route::get('/', function () {
    return redirect()->to('/cliente');
})->middleware('auth');

Route::get('/home', function () {
    return redirect()->to('/cliente');
})->middleware('auth');



Route::resource('articulos', 'App\Http\Controllers\ArticuloController')->middleware('auth');
Route::resource('cliente', 'App\Http\Controllers\ClienteController')->middleware('auth');
Route::resource('detalleCompra', 'App\Http\Controllers\VentaController')->middleware('auth');
Route::post('carrito', [ClienteController::class, 'contador'])->name('cliente.contador')->middleware('auth');

Route::get('detalle', [VentaController::class,'index'])->name('detalle')->middleware('auth');

Route::get('/articulos/{id}/show', [ArticuloController::class,'show'])->name('articulo.show')->middleware('auth');



//Esta es la Api Creada:
Route::get('api/productos', [ArticuloController::class,'getArticulos'])->name('api/productos')->middleware('auth');
Route::get('api/productos/{id}', [ArticuloController::class,'getArticulosId'])->name('api/productos')->middleware('auth');





Route::post('comprar', [VentaController::class, 'pagoFinal'])->name('comprar.pagoFinal')->middleware('auth');


Auth::routes();



