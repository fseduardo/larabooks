@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Autores</h1>
            <a href="{{ route('autor.create') }}" class="btn btn-success mt-1 mb-2">Adicionar</a>
            <table class="table table-striped table-bordered">
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
                        <td class="text-end">
                            <a href="{{ route('autor.show', $autor->CodAu) }}" class="btn btn-sm btn-primary">Visualizar</a>
                            <a href="{{ route('autor.edit', $autor->CodAu) }}" class="btn btn-sm btn-info">Editar</a>
                            <form action="{{ route('autor.destroy', $autor->CodAu) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Deletar</button>
                            </form>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $autores->links('vendor.pagination.bootstrap-5') }}

        </div>
    </div>
</div>
@endsection
