<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assunto;

class AssuntoController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $assuntos = Assunto::query()->latest()->paginate(10);

        return view('assunto.index', compact('assuntos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('assunto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Assunto::create($data);

        flash('Assunto adicionado com sucesso');

        return redirect()->route('assunto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Assunto $assunto)
    {
        return view('assunto.show', compact('assunto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Assunto $assunto)
    {
        return view('assunto.edit', compact('assunto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assunto $assunto)
    {
        $data = $request->all();
        $assunto->update($data);

        flash('Assunto atualizado com sucesso');

        return redirect()->route('assunto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assunto $assunto)
    {
        try {
            $assunto->delete();
            flash('Assunto excluído com sucesso');
        } catch (\Illuminate\Database\QueryException $e) {
            // Check for a specific error code (1451 for MySQL)
            if ($e->getCode() === '23000') {
                flash('Não é possível excluir o assunto porque ele está vinculado a um ou mais livros', 'alert-danger');
            } else {
                flash('Erro ao excluir assunto', 'alert-danger');
            }
        }

        return redirect()->route('assunto.index');
    }

    /**
     * Return result from serach 
     */
    public function search(Request $request)
    {
        $search = $request->q;
        $result = Assunto::where('Descricao', 'LIKE', "%{$search}%")->get(['CodAs', 'Descricao']);
        //Melhoria: Implementar Paginação

        return response()->json($result);
    }
}
