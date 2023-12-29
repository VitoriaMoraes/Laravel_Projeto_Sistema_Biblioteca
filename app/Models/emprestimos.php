<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;

class emprestimos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['status_emprestimo','id_livro'];
    public function livro()
    {
        return $this->belongsTo(Livro::class, 'id_livro');
    }
}
