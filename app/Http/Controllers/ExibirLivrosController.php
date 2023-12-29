<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\emprestimos;
use Illuminate\Support\Facades\Route;

class ExibirLivrosController extends Controller
{
    public function ExibirLivrosCadastrados()
    {
        $livros = Livro::all();
        // dd($livros->all());
        return view('LivrosCadastrados', ['livros' => $livros]);
    }

    public function LivrosEmprestados()
{
    $livros = Livro::all(); // Corrigido o nome do modelo para Livro
    $livrosEmprestados = emprestimos::all();
    
    if ($livrosEmprestados->isEmpty()) {
        $mensagem = "Nenhum livro foi solicitado até o momento";
        return view('LivrosEmprestados', compact('mensagem'));
    } else {
        return view('LivrosEmprestados', ['emprestimos' => $livrosEmprestados, 'livros' => $livros]);
    }
}

}