<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Exemplos de livros e seus autores
        $livros = [
            [
                'Titulo' => 'Clean Code',
                'AutorId' => 1, 
                'Editora' => 'Prentice Hall',
                'Edicao' => 1,
                'AnoPublicacao' => '2008',
                'Valor' => 50.00,
            ],
            [
                'Titulo' => 'Refactoring',
                'AutorId' => 2,
                'Editora' => 'Addison-Wesley',
                'Edicao' => 2,
                'AnoPublicacao' => '2018',
                'Valor' => 55.00,
            ],
            // Adicione mais livros e autores aqui
        ];

        foreach ($livros as $livro) {
            $livroId = DB::table('Livro')->insertGetId([
                'Titulo' => $livro['Titulo'],
                'Editora' => $livro['Editora'],
                'Edicao' => $livro['Edicao'],
                'AnoPublicacao' => $livro['AnoPublicacao'],
                'Valor' => $livro['Valor'],
                'created_at' => now(),
                'updated_at' => now()
            ]);

            // Relacionamento com Autor
            DB::table('Livro_Autor')->insert([
                'Livro_CodLi' => $livroId,
                'Autor_CodAu' => $livro['AutorId']
            ]);
        }
    }

    
}


