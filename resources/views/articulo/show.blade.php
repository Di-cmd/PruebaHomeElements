@extends('plantilla.plantilla')

@section('title', 'Show')

@section('contenido')


<div class="container">

    <br>
    <br>
    <br>


    <div style="text-align:center ">
        <h1>
            Agregar al Carrito</h1>
     </div>



     <br>
     <br>

            <div>
                <div style="text-align:center ">
                 <strong>  {{$articulo->nombreProducto}}</strong>
                </div>

                <br>
                <br>


                <div class="row" style="text-align:center ">


                <div class="col-6">
                    Descripción del producto
                </div>



                <div class="col-6">
                    {{$articulo->descripcion}}
                </div>




                <div class="col-6">
                    Precio por Unidad:  $
                </div>

                <div class="col-6">
                    {{$articulo->precioProducto}}
                </div>



                <div class="col-6">
                    Categoria:
                </div>

                <div class="col-6">
                    {{$articulo->categoriaProducto}}
                </div>

            </div>


                <form action="{{ route('cliente.contador')}}"  method="POST">
                    @csrf
                <div class="row">

                    <div class="col-6" style="text-align:center ">
                        <label>Cantidad a Comprar</label>
                    </div>

                    <div class="col-6">
                        <input type="hidden" value="{{$articulo->id}}" name="eventId">
                        <input type="number" class="form-control" name="cantidadCompra">
                    </div>
                </div>

            </div>
            <br>
            <br>
            <br>
            <div style="text-align:center ">
                <a href="/cliente" class="btn btn-danger ">Cancelar</a>
                <button type="submit" class="btn btn-success">Añadir</button>
            </div>

        </form>
          </div>

@endsection
