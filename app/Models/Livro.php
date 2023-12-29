<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['titulo','IBSN','genero','autor','capa'];

    public function emprestimos()
    {
        return $this->hasMany(Emprestimos::class, 'id_livro');
    }
}
