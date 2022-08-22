<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{



        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $articulo = Articulo::all();
        return view('articulo.index', compact('articulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getArticulos(){
        $articulos = Articulo::all();
        // return view('articulo.create');

        return response()->json( $articulos );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getArticulosId($id){
        // dd($id);
        $articulos = Articulo::find($id);
        // return view('articulo.create');

        return response()->json( $articulos );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();
        $articulos->codigo = $request->get('codigo');
        $articulos->nombreProducto = $request->get('nombre');
        $articulos->descripcion = $request->get('descripcion');
        $articulos->cantidadProducto = $request->get('cantidad');
        $articulos->precioProducto = $request->get('precio');
        $articulos->categoriaProducto = $request->get('categoria');
        if ($imagen = $request->file('imagen')) {
            $rutaGuardaImg = 'imagen/';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardaImg, $imagenProducto);
            $articulos['imagen'] = $imagenProducto;
        }


        $articulos->save();

        return redirect('/articulos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.show', compact('articulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articulo = Articulo::find($id);
        return view('articulo.edit', compact('articulo'));
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
        $articulo = Articulo::find($id);
        $articulo->codigo = $request->get('codigo');
        $articulo->nombreProducto = $request->get('nombre');
        $articulo->descripcion = $request->get('descripcion');
        $articulo->cantidadProducto = $request->get('cantidad');
        $articulo->precioProducto = $request->get('precio');
        $articulo->categoriaProducto = $request->get('categoria');
        if ($imagen = $request->file('imagen')) {
            $rutaGuardaImg = '/imagen';
            $imagenProducto = date('YmdHis') . "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardaImg, $imagenProducto);
            $articulo['imagen'] = $imagenProducto;
        }
        $articulo->save();
        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }


}
