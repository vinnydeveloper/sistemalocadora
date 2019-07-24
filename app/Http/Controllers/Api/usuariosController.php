<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Usuarios;

class usuariosController extends Controller
{
    public function listarUsuarios(Request $request){
        $usuarios = Usuarios::all();

        return response()->json($usuarios,404);
    }

    public function selecionarUsuario(Request $request, $id){
        $usuario = Usuarios::find($id);

        return response()->json($usuario,);
    }

    public function criarUsuario(Request $request){

        
        $usuario = new Usuarios();
        $usuario->nome = $request->nome;
        $resultado = $usuario->save();

        return response()->json([
            "resultado" => $resultado,
            "menssagem" => "cadastro concluido"
        ]);
    }

    public function deletarUsuario($id){
        $usuario = Usuarios::find($id);

        if($usuario != null){
            $resultado = $usuario->delete();
            return response()->json([
                "resultado" => $resultado,
                "menssagem" => "Delete concluido"
            ], 200);
        }else{
            return response()->json([
                "resultado" => false,
                "menssagem" => "Usuario não existe"
            ], 404);
        }
       
    }

    public function atualizarUsuario(Request $request, $id){
        
        //  $usuario = Usuarios::find($id);
        //     $profile = Profile::find($usuario->profile_id);
         $usuario->profile_id;
        $usuario->nome = $request->nome;
        $resultado = $usuario->save();

        return response()->json([
            "resultado" => $resultado,
            "menssagem" => "Edição concluida"
        ]);
    }

}
