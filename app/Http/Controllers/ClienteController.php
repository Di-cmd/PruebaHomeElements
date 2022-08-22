<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Cliente;
use App\Models\venta;
use App\Http\Controllers\Api\ArticuloController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{


       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $compra = venta::all();
        $cliente = Cliente::all();
        $articulo = Articulo::all();

        $request = Route::apiResource('index', ArticuloController::class);
        $carrito=0;
        return view('clientes.index', compact('articulo', 'user','cliente','compra','carrito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function contador(Request $request)
    {
        $user = Auth::user();
        $articulo = Articulo::find($request->eventId);
        $cliente = new cliente();

        if($request->cantidadCompra <= $articulo->cantidadProducto){

        $cliente->nombreProducto = $articulo->nombreProducto;
        $cliente->categoriaProducto = $articulo->categoriaProducto;

        if ($request->cantidadCompra >= 5) {
            $cliente->precioProducto = ($articulo->precioProducto * $request->cantidadCompra) - (($articulo->precioProducto * $request->cantidadCompra) * 10) / 100;
        } else {
            $cliente->precioProducto = $articulo->precioProducto * $request->cantidadCompra;
        }
        $cliente->cantidadCompra = $request->cantidadCompra;
        $cliente->nombreCliente = $user->name;
        $cliente->email = $user->email;
        $cliente->save();

        //Se actualiza el valor de la cantidad de articulos disponibles
        $articulo->cantidadProducto = $articulo->cantidadProducto - $cliente->cantidadCompra;
        $articulo->save();

        return redirect()->to('/cliente');
    }

    else{

        dd("No hay Suficientes productos disponibles, Tenemos ", $articulo->cantidad , "productos Disponibles");

    }

    }



}
