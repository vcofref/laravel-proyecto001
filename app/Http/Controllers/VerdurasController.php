<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerdurasController extends Controller
{
    public function index(){
        //logica de codigo
        return view('verduras')
        ->with('verduras', array('Papa', 'Zapallo', 'Lechuga'));
    }
    public function editarVerdura(){
        return 'edita tu verdura';
    }

    public function eliminarVerdura(){
        return 'elimina tu verdura';
    }

    public function agregarVerdura(){
        //logica de codigo
        return view('agregarVerduras');
    }

    public function guardarVerdura(Request $request){
        //logica de codigo
        $data = $request;

        return 'Nombre Verdura:'.$request->input("precio");
    }
}
