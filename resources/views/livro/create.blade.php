@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Adicionar Livro</h2>
            <form action="{{ route('livro.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mt-3">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" maxlength="40" name="Titulo" placeholder="Digite título">
                </div>
                <div class="form-group mt-3">
                    <label for="editora">Editora</label>
                    <input type="text" class="form-control" id="editora" maxlength="40" name="Editora" placeholder="Digite a editora">
                </div>
                <div class="form-group mt-3">
                    <label for="edicao">Edição</label>
                    <input type="number" class="form-control" id="edicao" name="Edicao" placeholder="Digite a edição">
                </div>
                <div class="form-group mt-3">
                    <label for="anoPublicacao">Ano de Publicação</label>
                    <input type="text" class="form-control" id="anoPublicacao" maxlength="20" name="AnoPublicacao" placeholder="Digite o ano de publicação">
                </div>
                <div class="form-group mt-3">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="valor" name="Valor" placeholder="Digite o valor">
                </div>
              
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection