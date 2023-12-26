@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Autores Index</h1>
            <a href="{{ route('autor.create') }}">Adicionar</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>CodAu</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($autores as $autor)
                    <tr>
                        <td>{{ $autor->CodAu }}</td>
                        <td>{{ $autor->Nome }}</td>
                        <td>
                            <a href="{{ route('autor.show', $autor->CodAu) }}">Visualizar</a>
                            <a href="{{ route('autor.edit', $autor->CodAu) }}">Editar</a>
                            <form action="{{ route('autor.destroy', $autor->CodAu) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-small" type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
