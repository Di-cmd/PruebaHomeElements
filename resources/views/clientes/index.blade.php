@extends('plantilla.plantilla')

@section('title', 'Home')

@section('contenido')




<style>

    .container{
      margin-bottom: 15%;
    }


    .card{
        border-radius: 6px;
        overflow: hidden;
        background:#fff;
        box-shadow: 0px 1px 10px rgb(0, 0, 0, 0.2);
        cursor: default;

    }

    .carrito{
      margin-top: 0.5%;
      text-align: center;
      width:250px;
      border-radius: 6px;
        overflow: hidden;
        background:#fff;
        box-shadow: 0px 1px 10px rgb(0, 0, 0, 0.2);
        cursor: default;
        font-display:inherit;


    }

    .detalle{
      margin-top: 0.5%;
      text-align: center;
      width:250px;
      border-radius: 6px;
        overflow: hidden;
        background:#fff;
        box-shadow: 0px 1px 10px rgb(0, 0, 0, 0.2);
        cursor: default;
        font-display:inherit;


    }


</style>

    <body>



<br>
<br>
<br>
@if(count($articulo)>0)

        <div class="row" >
            <div class="col-6" style="text-align:center ">

        <div class="carrito">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>     <strong>En el Carrito hay No:

                @foreach ($compra as $compra)

                @if($user->email==$compra->correoCliente)

                    {{$compra->cantidadProductos}}

                @endif

                @endforeach


                 Productos</strong>
        </div>
    </div>

    <div class="col-6" style="text-align:center ">
        <div class="detalle">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cup-hot-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M.5 6a.5.5 0 0 0-.488.608l1.652 7.434A2.5 2.5 0 0 0 4.104 16h5.792a2.5 2.5 0 0 0 2.44-1.958l.131-.59a3 3 0 0 0 1.3-5.854l.221-.99A.5.5 0 0 0 13.5 6H.5ZM13 12.5a2.01 2.01 0 0 1-.316-.025l.867-3.898A2.001 2.001 0 0 1 13 12.5Z"/>
                <path d="m4.4.8-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 3.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 3.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 3 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 4.4.8Zm3 0-.003.004-.014.019a4.167 4.167 0 0 0-.204.31 2.327 2.327 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.31 3.31 0 0 1-.202.388 5.444 5.444 0 0 1-.253.382l-.018.025-.005.008-.002.002A.5.5 0 0 1 6.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 6.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 6 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 7.4.8Zm3 0-.003.004-.014.019a4.077 4.077 0 0 0-.204.31 2.337 2.337 0 0 0-.141.267c-.026.06-.034.092-.037.103v.004a.593.593 0 0 0 .091.248c.075.133.178.272.308.445l.01.012c.118.158.26.347.37.543.112.2.22.455.22.745 0 .188-.065.368-.119.494a3.198 3.198 0 0 1-.202.388 5.385 5.385 0 0 1-.252.382l-.019.025-.005.008-.002.002A.5.5 0 0 1 9.6 4.2l.003-.004.014-.019a4.149 4.149 0 0 0 .204-.31 2.06 2.06 0 0 0 .141-.267c.026-.06.034-.092.037-.103a.593.593 0 0 0-.09-.252A4.334 4.334 0 0 0 9.6 2.8l-.01-.012a5.099 5.099 0 0 1-.37-.543A1.53 1.53 0 0 1 9 1.5c0-.188.065-.368.119-.494.059-.138.134-.274.202-.388a5.446 5.446 0 0 1 .253-.382l.025-.035A.5.5 0 0 1 10.4.8Z"/>
              </svg>    <a href="/detalle"> Realizar Pago</a>
        </div>

    </div>

    </div>

    @foreach ($articulo as $articulo)
    @if($articulo->cantidadProducto>0)

        <div class="card" style="width: 18rem; display:inline-block;margin:3%">
                <div style="text-align:center;margin:2% ">
                    <img src="/imagen/{{$articulo->imagen}}" alt="imagen de producto" width="200px" height="200px">
                </div>

            <div class="card-body" style="text-align:center ">
            <h5 class="card-title">{{$articulo->nombreProducto}}</h5>

            <div>
                <p class="card-text">Precio por Unidad: {{$articulo->precioProducto}}</p>
            </div>
            <div>
                <p class="card-text">Categoria: {{$articulo->categoriaProducto}}</p>
            </div>
            <br>

            <div>
                <a href="/articulos/{{$articulo->id}}/show" class="btn btn-info">Agregar Al carrito</a>
            </div>
            </div>
        </div>
        @endif
      @endforeach


      <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">


        </div>



        <div class="modal-body">
            <div style="text-align:center ">
             <strong>  {{$articulo->nombreProducto}}</strong>
            </div>
            <div>
              Descripción del producto  {{$articulo->descripcion}}
            </div>

            <div>
             Precio por Unidad:  $  {{$articulo->precioProducto}}
            </div>


            <div>
               Categoria:  {{$articulo->categoriaProducto}}
            </div>

            <form action="{{ route('cliente.contador')}}"  method="POST">
                @csrf
            <div>
             <label>Cantidad a Comprar</label>
             <input type="hidden" value="{{$articulo->id}}" name="eventId">
              <input type="number" class="form-control" name="cantidadCompra">
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Añadir</button>
        </div>




    </form>
      </div>
    </div>
  </div>


  @else


  <div style="text-align:center;font-size:30px ">
    <strong>Ups no hay articulos que mostrar, por favor vaya a crear Articulos</strong>
    </div>
    <br>
        <br>
    <div style="text-align:center ">
        <a  href="/articulos/create"   class="btn btn-info">Agregar Nuevo Producto</a>
    </div>
    <br>
    <br>







@endif


    </body>

    @endsection
