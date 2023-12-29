<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        //Criando a estrutura da tabela emprestimo
        Schema::create('Emprestimos', function(Blueprint $dado){
            $dado -> id();
            $dado -> string('status_emprestimo');
            $dado -> foreignId('id_livro')->references('id')->on('Livros');
        });
    }


};
