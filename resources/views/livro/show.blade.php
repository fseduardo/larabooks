@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Livro</h1> 
            <a href="{{ route('livro.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
           
            <div>Cod: {{ $livro->CodLi }}</div>
            <div>Título: {{ $livro->Titulo }}</div>
            <div>Editora: {{ $livro->Editora }}</div>
            <div>Edição: {{ $livro->Edicao }}</div>
            <div>Ano de Publicação: {{ $livro->AnoPublicacao }}</div> 
            <div>Valor: {{ $livro->Valor }}</div>

            <h2>Autores</h2>
            <ul>
                @foreach($livro->autores as $autor)
                    <li><a href="{{ route('autor.show', $autor) }}">{{ $autor->Nome }}</a></li>
                @endforeach
            </ul>

            <h2>Assunto</h2>
            <ul>
                @foreach($livro->assuntos as $assunto)
                    <li><a href="{{ route('assunto.show', $assunto) }}">{{ $assunto->Descricao }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
