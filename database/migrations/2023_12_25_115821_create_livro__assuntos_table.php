<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Livro_Assunto', function (Blueprint $table) {
            $table->unsignedInteger('Livro_CodLi');
            $table->foreign('Livro_CodLi')->references('CodLi')->on('Livro');
            $table->unsignedInteger('Assunto_CodAs');
            $table->foreign('Assunto_CodAs')->references('CodAs')->on('Assunto');


            $table->primary(['Livro_CodLi','Assunto_CodAs']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Livro_Assunto');
    }
};
