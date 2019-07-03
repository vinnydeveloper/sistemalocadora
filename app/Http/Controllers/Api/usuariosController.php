<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuarios;

class usuariosController extends Controller
{
    public function listarUsuarios(Request $request){
        $usuarios = Usuarios::all();

        return response()->json($usuarios);
    }

    public function selecionarUsuario(Request $request, $id){
        $usuario = Usuarios::find($id);

        return response()->json($usuario);
    }

    public function criarUsuario(Request $request){
        $usuarios = new Usuarios();
    }

}
