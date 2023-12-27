<div class="form-group mt-3">
    <label for="titulo">Título</label>
    <input type="text" class="form-control" id="titulo" maxlength="40" name="Titulo" value="{{ $livro->Titulo}}" placeholder="Digite título" required>
</div>
<div class="form-group mt-3">
    <label for="editora">Editora</label>
    <input type="text" class="form-control" id="editora" maxlength="40" name="Editora" value="{{ $livro->Editora}}"  placeholder="Digite a editora" required>
</div>
<div class="form-group mt-3">
    <label for="edicao">Edição</label>
    <input type="number" class="form-control" id="edicao" name="Edicao" value="{{ $livro->Edicao}}"  placeholder="Digite a edição" required>
</div>
<div class="form-group mt-3">
    <label for="anoPublicacao">Ano de Publicação</label>
    <input type="text" class="form-control" id="anoPublicacao" maxlength="20" name="AnoPublicacao" value="{{ $livro->AnoPublicacao}}"  placeholder="Digite o ano de publicação" required>
</div>
<div class="form-group mt-3">
    <label for="valor">Valor</label>
    <input type="text" class="form-control" id="valor" name="Valor" placeholder="Digite o valor" value="{{ $livro->Valor}}"  required>
</div>
<div class="form-group mt-3">
    <label for="autores">Autores</label>
    <select class="select2-autores form-control" id="autores" name="autores[]" multiple required> 
        @foreach($livro->autores as $autor)
            <option selected value="{{ $autor->CodAu }}">{{ $autor->Nome }}</option>
        @endforeach
      </select>
</div>
<div class="form-group mt-3">
    <label for="assuntos">Assunto</label>
    <select class="select2-assunto form-control" id="assuntos" name="assuntos[]" multiple required> 
        @foreach($livro->assuntos as $assunto)
            <option selected value="{{ $assunto->CodAs }}">{{ $assunto->Descricao }}</option>
        @endforeach
      </select>
</div>

<div class="form-group mt-3">
    <button type="submit" class="btn btn-success">Adicionar</button>
</div>


@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    
    $(document).ready(function() {
        $('select.select2-autores').select2({
            ajax: {
                url: "{{ route('autor.search') }}",
                dataType: 'json',
                processResults: function (data) {
                    //Melhoria: Implementar Paginação
                    return {
                        results: data.map(function(item) {
                            return { id: item.CodAu, text: item.Nome };
                        })
                    };
                }
                ,
                cache: true
            },
            placeholder: 'Digite o nome para buscar um autor.',
            minimumInputLength: 1
        })
        $('select.select2-assunto').select2({
            ajax: {
                url: "{{ route('assunto.search') }}",
                dataType: 'json',
                processResults: function (data) {
                    //Melhoria: Implementar Paginação
                    return {
                        results: data.map(function(item) {
                            return { id: item.CodAs, text: item.Descricao };
                        })
                    };
                }
                ,
                cache: true
            },
            placeholder: 'Digite a descrição para buscar um assunto.',
            minimumInputLength: 1
        });

        $('input#valor').mask('000.000.000.000.000,00', {reverse: true});
        $('input#anoPublicacao').mask('0000');
    });
</script>
@endsection