<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    
    protected $table = 'Livro';

    protected $primaryKey = 'CodLi';

    protected $fillable = [
        'Titulo', 'Editora', 'Edicao', 'AnoPublicacao', 'Valor'
    ];

    public function autores()
    {
        return $this->belongsToMany(Autor::class, 'Livro_Autor', 'Livro_CodLi', 'Autor_CodAu');
    }

    public function assuntos()
    {
        return $this->belongsToMany(Assunto::class, 'Livro_Assunto', 'Livro_CodLi', 'Assunto_CodAs');
    }
}
