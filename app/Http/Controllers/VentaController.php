<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Cliente;
use App\Models\User;
use App\Models\venta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VentaController extends Controller
{



    public $stacks = [];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::all();
        $articulo = Articulo::all();
        $stacks=$this->stacks;
        $user = User::all();
        return view('clientes.detalleCompra', compact('articulo', 'cliente','stacks'));
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
        //
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



    public function pagoFinal(Request $request)
    {
        $user = Auth::user();
        $cliente = cliente::find($user);
        $venta = new venta();
        $venta->nombreCliente = $user->name;
        $venta->email = $user->email;
        $venta->totalVenta = $cliente->sum('precioProducto');
        $venta->totalCantidad = $cliente->sum('cantidadCompra');

        $item = array(
            'nombreCliente' =>  $user->name,
            'email' => $user->email,
            'totalVenta' => $cliente->sum('precioProducto'),
            'totalCantidad' => $cliente->sum('cantidadCompra')
        );
        array_push($this->stacks, $item);
       

        $venta->save();

        //Este permite que se visualize el stock:

        return redirect()->to('/cliente');
    }


}
