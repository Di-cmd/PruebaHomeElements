<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $fillable =['codigo','nombreProducto','descripcion','cantidadProducto','precioProducto','categoriaProducto','imagen'];

}
