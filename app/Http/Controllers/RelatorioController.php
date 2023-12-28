<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RelatorioController extends Controller
{
    public function geral()
    {
        $dadosRelatorio = DB::table('RelatorioLivrosAutores')->get();
        return view('relatorio.geral', compact('dadosRelatorio'));
    }
}
