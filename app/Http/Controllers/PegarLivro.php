<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emprestimos;
use App\Models\Livro;

class PegarLivro extends Controller
{
        public function pegarLivros(Request $dados)
        {
            $livroId = $dados->id;
           // echo $livroId;
            if (emprestimos::where('id_livro', $livroId)->exists()) {
                return "Livro já emprestado!";
            }
    
            emprestimos::create([
                'status_emprestimo' => 'Emprestado', // ou outro status desejado
                'id_livro' => $livroId,
            ]);
            
            return "Livro emprestado com sucesso!"; 
        }
    }

