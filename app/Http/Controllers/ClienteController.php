<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
public function Cliente()
{
    $nombres = ['Jhenifer Katerin Chilito','Hellen Yulisa Caicedo','Karol Valeria Cañas','Danilve Zoel Gaviria','Luisa Fernanda Herrera','Jhon Fredy Solarte','Kenny Eliut Bermudez'];
return view('Cliente.cliente', compact('nombres'));
}

}//End Class
