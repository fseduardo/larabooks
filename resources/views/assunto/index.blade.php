@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Assunto Index</h1>
            <a href="{{ route('assunto.create') }}">Adicionar</a>
            <table class="table">
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
                        <td>
                            <a href="{{ route('assunto.show', $assunto->CodAs) }}">Visualizar</a>
                            <a href="{{ route('assunto.edit', $assunto->CodAs) }}">Editar</a>
                            <form action="{{ route('assunto.destroy', $assunto->CodAs) }}" method="POST">
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
