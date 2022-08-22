@extends('plantilla.plantilla')

@section('title', 'Home')

@section('contenido')


<style>
    .container{

    }
</style>

<div class="container">

    <br>

    <div style="text-align:center;font-size:30px ">
<strong>Modo Administrador</strong>
</div>
<br>
    <br>
<div>
    <a  href="/articulos/create"   class="btn btn-info">Agregar Nuevo Producto</a>
</div>
<br>
<br>



<table class="table table-striped" style="text-align:center" width="100%" border="1px">
    <thead>

        <tr>
        <th>ID</th>
        <th>CODIGO</th>
        <th>Nombre del Producto</th>
        <th>Descripcion</th>
        <th>Cantidad Disponible</th>
        <th>Precio</th>
        <th>Categoria</th>
        <th>Imagen</th>
        <th>Acciones</th>
    </tr>

    </thead>

    <tbody>

        @foreach ($articulo as $articulo)



        <tr>
            <td>{{$articulo->id}}</td>
            <td>{{$articulo->codigo}}</td>
            <td>{{$articulo->nombreProducto}}</td>
            <td>{{$articulo->descripcion}}</td>
            <td>{{$articulo->cantidadProducto}}</td>
            <td>{{$articulo->precioProducto}}</td>
            <td>{{$articulo->categoriaProducto}}</td>
            <td>
                <div>
                    <img src="/imagen/{{$articulo->imagen}}" alt="imagen de producto" width="60%" height="20%">
                </div>
            </td>
            <td width="20%">

                <form action="{{ route('articulos.destroy',$articulo->id) }}" method="POST">
                    <a href="/articulos/{{$articulo->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                   </form>

            </form>

            </td>
        </tr>

        @endforeach


    </tbody>


  </table>
  <br>
  <br>
  <br>

</div>

@endsection
