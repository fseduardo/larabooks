@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Adicionar Assunto</h2>
            <form action="{{ route('assunto.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" class="form-control" id="descricao" maxlength="20" name="Descricao" placeholder="Digite o assunto">
                </div>
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection