@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Editar Livro</h2>
            <form action="{{ route('livro.update', $livro) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                @include('livro._form')
            </form>
        </div>
    </div>
</div>
@endsection