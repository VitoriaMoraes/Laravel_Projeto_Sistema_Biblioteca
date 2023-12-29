<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class CadastroLivro extends Controller
{
    public function controleImagem(Request $dados)
    {
        //dd($dados->all());
        $imagemLivro = null;

        if ($dados->hasFile('capa') && $dados->file('capa')->isValid()) {
            $imagemLivro = $dados->file('capa')->store('livro', 'public');
        }

        Livro::create([
            'titulo' => $dados->titulo,
            'ISBN' => $dados->isbn, 
            'genero' => $dados->genero,
            'autor' => $dados->autor,
            'capa' => $imagemLivro
        ]);

        $mensagem = "Livro Cadastrado!";
        return view('posCadastro', compact('mensagem'));

    }


}
