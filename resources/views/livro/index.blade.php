@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Livros</h1>
            <a href="{{ route('livro.create') }}" class="btn btn-success mt-1 mb-2">Adicionar</a>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>CodLi</th>
                        <th>Titulo</th>
                        <th>Autores</th>
                        <th>Assuntos</th>
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
                        <td>
                            <ul>
                                @foreach($livro->autores as $autor)
                                    <li><a href="{{ route('autor.show', $autor) }}">{{ $autor->Nome }}</a></li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <ul>
                                @foreach($livro->assuntos as $assunto)
                                    <li><a href="{{ route('assunto.show', $assunto) }}">{{ $assunto->Descricao }}</a></li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $livro->Editora }}</td>
                        <td>{{ $livro->Edicao }}</td>
                        <td>{{ $livro->AnoPublicacao }}</td>
                        <td>R$ {{ \App\Util\FormatNumber::formatReal($livro->Valor ) }}</td>
                        <td class="text-end">
                            <a href="{{ route('livro.show', $livro->CodLi) }}" class="btn btn-sm btn-primary">Visualizar</a>
                            <a href="{{ route('livro.edit', $livro->CodLi) }}" class="btn btn-sm btn-info" >Editar</a>
                            <form action="{{ route('livro.destroy', $livro->CodLi) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $livros->links('vendor.pagination.bootstrap-5') }}
           
        </div>
        
               

    </div>
</div>
@endsection
