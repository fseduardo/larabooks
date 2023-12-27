@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Livro Index</h1>
            <a href="{{ route('livro.create') }}">Adicionar</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>CodLi</th>
                        <th>Titulo</th>
                        <th>Editora</th>
                        <th>Edicao</th>
                        <th>Ano de Publicação</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($livros as $livro)
                    <tr>
                        <td>{{ $livro->CodLi }}</td>
                        <td>{{ $livro->Titulo }}</td>
                        <td>{{ $livro->Editora }}</td>
                        <td>{{ $livro->Edicao }}</td>
                        <td>{{ $livro->AnoPublicacao }}</td>
                        <td>R$ {{ \App\Util\FormatNumber::formatReal($livro->Valor ) }}</td>
                        <td>
                            <a href="{{ route('livro.show', $livro->CodLi) }}">Visualizar</a>
                            <a href="{{ route('livro.edit', $livro->CodLi) }}">Editar</a>
                            <form action="{{ route('livro.destroy', $livro->CodLi) }}" method="POST">
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
