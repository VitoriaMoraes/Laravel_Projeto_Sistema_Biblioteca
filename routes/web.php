<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastroLivro;
use App\Http\Controllers\ExibirLivrosController;
use App\Http\Controllers\ExcluirLivro;
use App\Http\Controllers\PegarLivro;
use App\Http\Controllers\AtualizarLivro;



Route::view('/','inicio');

Route::view('/login', 'login');
Route::post('/login',[LoginController::class,'ValidarLogin']);

Route::view('/livroCad','livroCad');
Route::post('/livroCad',[CadastroLivro::class,'controleImagem']);
//Livros Cadastrados (ADMIN)
Route::view('/LivrosCadastrados', 'LivrosCadastrados');
Route::get('/LivrosCadastrados',[ExibirLivrosController::class, 'ExibirLivrosCadastrados']);

//Livros Disponiveis (Usuário)
Route::view('/TelaPrincipal','TelaPrincipal');
Route::get('/TelaPrincipal',[ExibirLivrosController::class,'LivrosDisponiveis']);

//PEGAR LIVRO
Route::post('/pegarLivro', [PegarLivro::class, 'pegarLivros']);

//EMPRESTAR LIVRO
Route::view('/LivrosEmprestados','LivrosEmprestados');
Route::get('/LivrosEmprestados',[ExibirLivrosController::class, 'LivrosEmprestados']);

//EXCLUIR LIVRO
Route::view('/ExcluirLivro', 'ExcluirLivro');
//Route::get('/ExcluirLivro/{idLivro}', [ExcluirLivro::class, 'ExcluirLivro']);
Route::post('/Excluir-Livro', [ExcluirLivro::class,'Excluir']);

Route::view('/posExclusao','posExclusao');

//ATUALIZAR LIVRO
Route::view('/Atualizar-livro','Atualizar');
Route::post('/Atualizar-livro',[AtualizarLivro::class,'exibir']);