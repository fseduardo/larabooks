<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW RelatorioLivrosAutores AS
            SELECT 
                a.Nome as Autor,
                l.Titulo,
                l.Editora,
                l.Edicao,
                l.AnoPublicacao,
                l.Valor,
                GROUP_CONCAT(asst.Descricao SEPARATOR ', ') as Assuntos
            FROM 
                Autor a
            JOIN 
                Livro_Autor la ON a.CodAu = la.Autor_CodAu
            JOIN 
                Livro l ON la.Livro_CodLi = l.CodLi
            LEFT JOIN 
                Livro_Assunto las ON l.CodLi = las.Livro_CodLi
            LEFT JOIN 
                Assunto asst ON las.Assunto_CodAs = asst.CodAs
            GROUP BY 
                l.CodLi, a.Nome
            ORDER BY 
                a.Nome
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW IF EXISTS RelatorioLivrosAutores");
    }
};
