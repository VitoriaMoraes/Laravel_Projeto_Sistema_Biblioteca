<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\emprestimos;

class DevolverLivroController extends Controller
{
    public function DevolverLivros(Request $dados)
    {
        $emprestimoId = $dados->input('emprestimo_id');
        
        $emprestimo = emprestimos::find($emprestimoId);
    
        $emprestimo->delete();
    
        return view('devolverLivro');
    }
}
