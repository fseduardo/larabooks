<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autores = [
            'Robert C. Martin (Uncle Bob)',
            'Martin Fowler',
            'Ian Sommerville',
            'Roger S. Pressman',
            'Kent Beck', 
            'Erich Gamma'
        ];

        foreach ($autores as $nome) {
            DB::table('Autor')->insert([
                'Nome' => $nome,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
