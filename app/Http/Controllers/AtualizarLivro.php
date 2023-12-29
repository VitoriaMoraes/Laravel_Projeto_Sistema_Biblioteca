<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class AtualizarLivro extends Controller
{
    public function exibir(Request $dados)
    {
        $livrosID = $dados->id;
        $novoTitulo = $dados->titulo;
        $novoGenero = $dados->genero;
        $novoAutor = $dados->autor;

        $livroExiste = Livro::where('id', $livrosID)
            ->exists();

        $livro = Livro::find($livrosID);
        //echo $livro;

        if ($livro) {
            $dadosAtualizados = [];

            if ($dados->filled('titulo')) {
                $dadosAtualizados['titulo'] = $dados->titulo;
            }

            if ($dados->filled('genero')) {
                $dadosAtualizados['genero'] = $dados->genero;
            }

            if ($dados->filled('autor')) {
                $dadosAtualizados['autor'] = $dados->autor;
            }

            $livro->update($dadosAtualizados);

            $mensagem = 'O livro foi atualizado com sucesso!';
        } else {
            $mensagem = 'Ouve um problema ao salvar os dados, por favor tente novamente.';
        }
        return view('posAtualizacao',compact('mensagem'));
    }
}
