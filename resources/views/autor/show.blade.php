@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Autor</h1>

            <a href="{{ route('autor.index') }}" class="btn btn-sm btn-secondary">Voltar</a>
           
            <div>Cod: {{ $autor->CodAu }}</div>
            <div>Nome: {{ $autor->Nome }}</div>

            <h2>Livros</h2>
            <ul>
                @foreach($autor->livros as $livro)
                    <li><a href="{{ route('livro.show', $livro) }}">{{ $livro->Titulo }}</a></li>
                @endforeach
            </ul>
                     
        </div>
    </div>
</div>
@endsection
