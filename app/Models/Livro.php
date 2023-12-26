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
}
