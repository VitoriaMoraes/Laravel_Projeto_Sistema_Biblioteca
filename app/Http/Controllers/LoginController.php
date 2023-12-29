<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;
class LoginController extends Controller
{
    public function ValidarLogin(Request $dados){

        if($dados->Usuario =='admin' && $dados->senha=='admin1234'){
            return view('livroCad');

        }else if($dados->Usuario=='vitoria' && $dados->senha=='0307'){
            $livros = Livro::all();
            return view('TelaPrincipal',['livros' => $livros]);

        }else{
            return view('login');
        }
    }
}
