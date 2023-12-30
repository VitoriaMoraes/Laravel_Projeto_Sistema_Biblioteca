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
    $livrosEmprestados = emprestimos::with('livro')->get();

    if ($livrosEmprestados->isEmpty()) {
        $mensagem = "Nenhum livro foi solicitado até o momento";
        return view('LivrosEmprestados', compact('mensagem'));
    } else {
        return view('LivrosEmprestados', compact('livrosEmprestados'));
    }
}

}