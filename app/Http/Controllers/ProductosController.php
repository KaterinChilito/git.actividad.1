<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
public function productos()
{
 return view('Productos.productos');
}
    
}//End Class
