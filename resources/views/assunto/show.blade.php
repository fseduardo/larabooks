@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Assunto</h1>
           
            <div>{{ $assunto->CodAs }}</div>
            <div>{{ $assunto->Descricao }}</div>
                     
        </div>
    </div>
</div>
@endsection
