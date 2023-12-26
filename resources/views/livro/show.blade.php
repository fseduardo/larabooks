@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Assunto</h1>
           
            <div>{{ $livro->CodAs }}</div>
            <div>{{ $livro->Titulo }}</div>
            <div>{{ $livro->Editora }}</div>
            <div>{{ $livro->Edicao }}</div>
            <div>{{ $livro->AnoPublicacao }}</div> 
            <div>{{ $livro->Valor }}</div>
            
        </div>
    </div>
</div>
@endsection
