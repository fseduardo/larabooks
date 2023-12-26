@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Editar Assunto</h2>
            <form action="{{ route('assunto.update', $assunto) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="descricao">Assunto</label>
                    <input type="text" class="form-control" id="descricao" maxlength="20" name="Descricao" value="{{ $assunto->Descricao }}" placeholder="Digite o assunto">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection