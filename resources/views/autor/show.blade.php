@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Autor</h1>
           
            <div>{{ $autor->CodAu }}</div>
            <div>{{ $autor->Nome }}</div>
                     
        </div>
    </div>
</div>
@endsection
