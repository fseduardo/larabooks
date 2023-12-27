<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autor::query()->latest()->paginate(10);


        return view('autor.index', compact('autores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('autor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Autor::create($data);

        flash('Autor adicionado com sucesso');

        return redirect()->route('autor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        return view('autor.show', compact('autor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Autor $autor)
    {
        return view('autor.edit', compact('autor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Autor $autor)
    {
        $data = $request->all();
        $autor->update($data);

        flash('Autor atualizado com sucesso');

        return redirect()->route('autor.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Autor $autor)
    {
        try {
            $autor->delete();
            flash('Autor excluído com sucesso');
        } catch (\Illuminate\Database\QueryException $e) {
            // Check for a specific error code (1451 for MySQL)
            if ($e->getCode() === '23000') {
                flash('Não é possível excluir o autor porque ele está vinculado a um ou mais livros', 'alert-danger');
            } else {
                flash('Erro ao excluir autor', 'alert-danger');
            }
        }

        return redirect()->route('autor.index');
    }


    /**
     * Return result from serach 
     */
    public function search(Request $request)
    {
        $search = $request->q;
        $result = Autor::where('Nome', 'LIKE', "%{$search}%")->get(['CodAu', 'Nome']);
        //Melhoria: Implementar Paginação

        return response()->json($result);
    }
}
