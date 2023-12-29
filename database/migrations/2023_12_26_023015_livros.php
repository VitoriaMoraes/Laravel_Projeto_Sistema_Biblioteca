<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{  //metodo de criação de tabelas

    public function up(): void
    {
        //Criando a estrutura da tabela Livro
        Schema::create('Livros', function(Blueprint $dado){
            $dado -> id();
            $dado -> string('titulo');
            $dado -> string('ISBN')->default('XXXXXXXXX-Y');
            $dado -> String('genero');
            $dado -> String('autor');
            $dado -> binary('capa');
        });
    }
    
};