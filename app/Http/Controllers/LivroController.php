<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLivroRequest;
use Illuminate\Http\Request;
use App\Models\Livro;
use App\Models\Autor;
use App\Models\Assunto;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();

        return view('livro.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $livro = new Livro;

        return view('livro.create', compact('livro'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivroRequest $request)
    {
        $data = $request->all();

        $livro = Livro::create($data);

        $livro->autores()->attach($request->input('autores'));
        $livro->assuntos()->attach($request->input('assuntos'));

        flash('Livro adicionado com sucesso', 'success');

        return redirect()->route('livro.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        return view('livro.show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('livro.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreLivroRequest $request, Livro $livro)
    {
        $data = $request->all();
        $livro->update($data);

        $livro->autores()->sync($request->input('autores'));
        $livro->assuntos()->sync($request->input('assuntos'));

        flash('Livro atualizado com sucesso', 'success');

        return redirect()->route('livro.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $livro->delete();

        return redirect()->route('livro.index');
    }
}
