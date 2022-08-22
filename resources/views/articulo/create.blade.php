@extends('plantilla.plantilla')

@section('title', 'Home')

@section('contenido')

<br>
<br>

<div style="text-align:center ">
    <h1>Crear Nuevo Producto</h1>
 </div>

 <br>
 <br>



 <form action="/articulos" method="POST" enctype="multipart/form-data">

     @csrf

     <div class="row">

        <div class="col-6">
            <p>Codigo</p>
         </div>

         <div class="col-6">
            <p>Nombre</p>
         </div>

     <div class="col-6">
        <input class="form-control" type="text" placeholder="Codigo" name="codigo">
     </div>


     <div class="col-6">
        <input class="form-control" type="text" placeholder="Nombre" name="nombre">
     </div>

     <div class="col-6">
        <p>Descripción</p>
     </div>

     <div class="col-6">
        <p>cantidad</p>
     </div>
     <div class="col-6">
        <input class="form-control" type="text" placeholder="Descripcion" name="descripcion">
    </div>



    <div class="col-6">
        <input class="form-control" type="number" placeholder="Cantidad" name="cantidad">
    </div>


    <div class="col-6">
        <p>precio</p>
     </div>

     <div class="col-6">
        <p>Categoria</p>
     </div>

    <div class="col-6">
        <input class="form-control" type="number" placeholder="Precio" name="precio">
    </div>


     <div class="col-6">
     <select class="form-select"placeholder="categoria" name="categoria">
        <option selected></option>
        <option value="Accesorios">Accesorios</option>
        <option value="Mujer">Mujer</option>
        <option value="Hombre">Hombre</option>
      </select>
    </div>

    <div class="col-6">
        <p>Foto del Producto</p>
     </div>

     <div class="col-6">
        <p> </p>
     </div>

    <div class="col-6">
     <input type="file" name="imagen" >
    </div>
        <div class="col-6" style="text-align:center ">
            <a href="/articulos" class="btn btn-danger ">Cancelar</a>
            <button  type="submit" class="btn btn-info" style="margin-left: 15%">Crear Articulo</button>
        </div>
    </div>

 </form>
 <br>
 <br>
 <br>
 <br>

@endsection
