@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Assunto</h1>
            <a href="{{ route('assunto.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
           
            <div>Cod: {{ $assunto->CodAu }}</div>
            <div>Nome: {{ $assunto->Descricao }}</div>

            <h2>Livros</h2>
            <ul>
                @foreach($assunto->livros as $livro)
                    <li><a href="{{ route('livro.show', $livro) }}">{{ $livro->Titulo }}</a></li>
                @endforeach
            </ul>
                     
                     
        </div>
    </div>
</div>
@endsection
