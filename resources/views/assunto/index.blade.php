@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Assuntos</h1>
            <a href="{{ route('assunto.create') }}" class="btn btn-success mt-1 mb-2">Adicionar</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>CodAs</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($assuntos as $assunto)
                    <tr>
                        <td>{{ $assunto->CodAs }}</td>
                        <td>{{ $assunto->Descricao }}</td>
                        <td class="text-end">
                            <a href="{{ route('assunto.show', $assunto->CodAs) }}" class="btn btn-sm btn-primary">Visualizar</a>
                            <a href="{{ route('assunto.edit', $assunto->CodAs) }}" class="btn btn-sm btn-info">Editar</a>
                            <form action="{{ route('assunto.destroy', $assunto->CodAs) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Deletar</button>
                            </form>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $assuntos->links('vendor.pagination.bootstrap-5') }}

        </div>
    </div>
</div>
@endsection
