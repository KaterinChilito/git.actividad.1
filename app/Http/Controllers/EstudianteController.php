<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudiante extends Controller
{
    public function estudiantes()
    {
        return view('estudiantes');
    }
}
