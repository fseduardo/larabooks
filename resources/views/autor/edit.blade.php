@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Editar Autor</h2>
            <form action="{{ route('autor.update', $autor) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nomeAutor">Nome do Autor</label>
                    <input type="text" class="form-control" id="nomeAutor" maxlength="40" name="Nome" value="{{ $autor->Nome }}" placeholder="Digite o nome do autor">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection