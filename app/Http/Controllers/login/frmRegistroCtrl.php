<?php

namespace App\Http\Controllers\login;
//es la manera en la que se llama a un controlador dentro de este codigo
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class frmRegistroCtrl extends Controller
{
    public function mostrarDatos(){
        return view('Registro.frmRegistro');
    }
}
