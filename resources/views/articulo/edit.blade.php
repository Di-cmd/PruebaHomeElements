@extends('plantilla.plantilla')

@section('title', 'Editar')

@section('contenido')


<div class="container">


<div style="text-align:center ">
    <h1>Editar Producto</h1>
 </div>


 <form action="/articulos/{{$articulo->id}}" method="POST">
     @csrf
     @method('PUT')

     <div class="row">

        <div class="col-6">
            <p>Codigo</p>
         </div>

         <div class="col-6">
            <p>Nombre</p>
         </div>

     <div class="col-6">
        <input class="form-control" type="text" placeholder="Codigo" name="codigo" value="{{$articulo->codigo}}">
     </div>


     <div class="col-6">
        <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" value="{{$articulo->nombreProducto}}">
    </div>


    <div class="col-6">
        <p>Descripción</p>
     </div>

     <div class="col-6">
        <p>cantidad</p>
     </div>

    <div class="col-6">
        <input class="form-control" type="text" placeholder="Descripcion" name="descripcion" value="{{$articulo->descripcion}}">
    </div>



    <div class="col-6">
        <input class="form-control" type="number" placeholder="Cantidad" name="cantidad" value="{{$articulo->cantidadProducto}}">
    </div>

    <div class="col-6">
        <p>precio</p>
     </div>

     <div class="col-6">
        <p>Categoria</p>
     </div>

    <div class="col-6">
        <input class="form-control" type="number" placeholder="Precio" name="precio" value="{{$articulo->precioProducto}}">
    </div>


    <div class="col-6">
        <input class="form-control" type="text" placeholder="Precio" name="precio" value="{{$articulo->categoriaProducto}}">
    </div>

     <div class="col-6">
         <img src="/imagen/{{$articulo->imagen}}" alt="imagen de producto" width="200px" height="200px">
         <input type="file" name="imagen" >
     </div>


     <div class="col-6">
        <br>
        <br>

        <a href="/articulos" class="btn btn-danger ">Cancelar</a>
     <button  type="submit" class="btn btn-info" style="margin-left: 15%">Editar Articulo</button>
    </div>

 </form>
</div>
</div>

<br>
<br>
<br>
<br>
<br>

@endsection
