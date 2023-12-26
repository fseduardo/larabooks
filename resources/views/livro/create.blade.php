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
                    <input type="text" class="form-control" id="titulo" maxlength="40" name="Titulo" placeholder="Digite título" required>
                </div>
                <div class="form-group mt-3">
                    <label for="editora">Editora</label>
                    <input type="text" class="form-control" id="editora" maxlength="40" name="Editora" placeholder="Digite a editora" required>
                </div>
                <div class="form-group mt-3">
                    <label for="edicao">Edição</label>
                    <input type="number" class="form-control" id="edicao" name="Edicao" placeholder="Digite a edição" required>
                </div>
                <div class="form-group mt-3">
                    <label for="anoPublicacao">Ano de Publicação</label>
                    <input type="text" class="form-control" id="anoPublicacao" maxlength="20" name="AnoPublicacao" placeholder="Digite o ano de publicação" required>
                </div>
                <div class="form-group mt-3">
                    <label for="valor">Valor</label>
                    <input type="text" class="form-control" id="valor" name="Valor" placeholder="Digite o valor" required>
                </div>
                <div class="form-group mt-3">
                    <label for="autores">Autores</label>
                    <select class="select2-autores form-control" id="autores" name="autores[]" multiple required> 
                        @foreach($autores as $autor)
                            <option value="{{ $autor->CodAu }}">{{ $autor->Nome }}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group mt-3">
                    <label for="assuntos">Assunto</label>
                    <select class="select2-autores form-control" id="assuntos" name="assuntos[]" multiple required> 
                        @foreach($assuntos as $assunto)
                            <option value="{{ $assunto->CodAs }}">{{ $assunto->Descricao }}</option>
                        @endforeach
                      </select>
                </div>
              
                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-success">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
        $('.select2-autores').select2();
    });
</script>
@endsection