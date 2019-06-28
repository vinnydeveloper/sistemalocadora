<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;
use App\FilmeAtor;
use App\FilmeCategoria;
use App\Inventario;


class FilmeController extends Controller
{
    public function todosFilmes(Request $request){
        
        if($request->isMethod('GET')){
            
            $todosFilmes = Filme::take(30)->get();

            return view('filmes',["todosFilmes"=>$todosFilmes]);
        }
    }

    public function editar(Request $request, $id){
            if($request->isMethod('GET')){
                $filme = Filme::find($id);

                return view('editarFilme',["filme"=>$filme]);
            }
              $filme = Filme::find($request->filmeId);
              $filme->titulo = $request->filmeTitulo;
              $resultado = $filme->save();

              return view('editarFilme',['resultado'=>$resultado,'filme'=>$filme]);
           
    }

    public function deletarFilmes($id){

        $filmesAtores = FilmeAtor::where("filme_id","=",$id)->get();

        foreach ($filmeAtores as $registro) {
            $registro->delete();
        }
        
         $filme = Filme::find($id);

         $filme->delete();

        echo "deu certo";

    }
}
