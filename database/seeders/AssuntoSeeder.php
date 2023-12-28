<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssuntoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $assuntos = [
            'PHP',
            'MySQL',
            'HTML',
            'JS',
            'NODE',
            'CSS',
            'Laravel',
            'React',
            'Angular',
            'Vue'
        ];

        foreach ($assuntos as $assunto) {
            DB::table('Assunto')->insert([
                'Descricao' => $assunto,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
