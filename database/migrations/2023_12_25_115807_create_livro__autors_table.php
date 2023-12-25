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
        Schema::create('Livro_Autor', function (Blueprint $table) {
            $table->unsignedInteger('Livro_CodLi');
            $table->foreign('Livro_CodLi')->references('CodLi')->on('Livro');
            $table->unsignedInteger('Autor_CodAu');
            $table->foreign('Autor_CodAu')->references('CodAu')->on('Autor');

            $table->primary(['Livro_CodLi','Autor_CodAu']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Livro_Autor');
    }
};
