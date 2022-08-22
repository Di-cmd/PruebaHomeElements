@extends('plantilla.plantilla')

@section('title', 'Home')

@section('contenido')


<style>
    .container{
      margin-bottom: 10%
    }
</style>



<div class="container">


<br>
<br>
<br>
<div style="text-align:center;font-size:30px">
    <strong>Detalle de la compra</strong>
</div>

<br>
<br>
<br>
@if(auth()->check())

@foreach ($cliente as $cliente)

@if(auth()->user()->email==$cliente->email)
<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-3">
            <strong> {{$cliente->nombreProducto}}</strong>
            </div>
            <div class="col-3">
                Categoria: {{$cliente->categoriaProducto}}
            </div>
            <div class="col-3">
                Cantidad: {{$cliente->cantidadCompra}}
            </div>

            <div class="col-3">
                Precio Total Producto: {{$cliente->precioProducto}}
            </div>

        </div>

    </div>
</div>
@endif
@endforeach


<div class="row" style="text-align:center ">

    <div class="col-6">
     <strong>   Total de la compra:</strong>
    </div>

    <div class="col-6" style="background:greenyellow">
        <strong>   </strong>
    </div>
</div>
@endif

  <br>
  <br>

        <div class="row" style="text-align:center ">

            <div class="col-12">
                <form action="{{ route('comprar.pagoFinal')}}"  method="POST">
                        @csrf

                    <div>
                        <button  type="submit" class="btn btn-success"  >Finalizar Pago</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Button trigger modal -->

  <!-- Modal -->


  <br>
  <br>
  <br>

  <div class="alert alert-success" role="alert">
    Se Ha realizado el pago correctamente.
  </div>




</div>

    @endsection
