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
        $assuntos = Assunto::all();

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

        return redirect()->route('assunto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Assunto $assunto)
    {
        $assunto->delete();

        return redirect()->route('assunto.index');
    }
}
