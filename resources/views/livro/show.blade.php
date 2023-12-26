@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Livro</h1>
           
            <div>Cod: {{ $livro->CodLi }}</div>
            <div>Título: {{ $livro->Titulo }}</div>
            <div>Editora: {{ $livro->Editora }}</div>
            <div>Edição: {{ $livro->Edicao }}</div>
            <div>Ano de Publicação: {{ $livro->AnoPublicacao }}</div> 
            <div>Valor: {{ $livro->Valor }}</div>

            Autores
            <ul>
            @foreach($livro->autores as $autor)
                <li>{{ $autor->Nome }}</li>
            @endforeach
            </ul>

            Assunto
            <ul>
            @foreach($livro->assuntos as $assuntos)
                <li>{{ $assuntos->Descricao }}</li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
