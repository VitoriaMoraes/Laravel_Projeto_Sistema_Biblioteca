<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class ExcluirLivro extends Controller
{
    public function Excluir(Request $dados){

        $livrosID = $dados->id;
        $livrosTitulo = $dados->titulo;

        $livroExiste = Livro::where('id', $livrosID)
        ->where('titulo', $livrosTitulo)
        ->exists();

        if ($livroExiste) {
            Livro::where('id', $livrosID)
                 ->where('titulo', $livrosTitulo)
                 ->delete();

                 $mensagem = 'O livro '.$livroExiste. ' Foi excluido!';
                 return view('posExclusao', compact('mensagem'));
        }else{
                $mensagem = 'O livro não foi encontrado na biblioteca';
                return view('posExclusao',compact('mensagem'));
        }
    }
}
