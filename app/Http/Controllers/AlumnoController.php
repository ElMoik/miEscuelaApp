<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function consultar(){
        $alumnos = Alumno::paginate(1);

        return view('alumnos.alumnos',compact('alumnos'));
    }
}
