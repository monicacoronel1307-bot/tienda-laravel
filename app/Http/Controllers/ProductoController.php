<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all(); // trae todas las filas de la tabla

        return view('productos.index', ['productos' => $productos]);
    }
}
