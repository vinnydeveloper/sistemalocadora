<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ator;
class atorController extends Controller
{
    //
    public function index(Request $request){
        if($request->isMethod('GET')){
            $todosAtores = Ator::all()->limit(10);
            return view('ator',["todosAtores"=>$todosAtores]);
        }

    }


    public function create(Request $request){

        if($request->isMethod('GET')){
            return view('cadastroAtor');
        }

        $novoAtor = new Ator();
        $novoAtor->primeiro_nome = $request->primeiroNome;
        $novoAtor->ultimo_nome = $request->segundoNome;
        $novoAtor->ultima_atualizacao = date('y-m-d');
        $resultado = $novoAtor->save();

       
        return view('cadastroAtor',["resultado"=>$resultado]);
    }

    public function editar(Request $request, $id){
        if($request->isMethod('GET')){
            
            $ator = Ator::find($id);

            return view('editarAtor',["ator"=>$ator]);
        }

        $ator = Ator::find($request->ator_id);
        $ator->primeiro_nome = $request->primeiroNome;
        $ator->ultimo_nome = $request->segundoNome;
        $resultado = $ator->save();

        return view("editarAtor",["resultado"=>$resultado, "ator"=>$ator]);
    }

     public function deletarAtor($id){
        
         $filme = Ator::find($id);

         $filme->delete();

        echo "deu certo";

    }
}
