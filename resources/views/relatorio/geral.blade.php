<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Livros e Autores</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Relatório de Livros e Autores</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Autor</th>
                    <th>Título</th>
                    <th>Editora</th>
                    <th>Edição</th>
                    <th>Ano de Publicação</th>
                    <th>Valor</th>
                    <th>Assuntos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dadosRelatorio as $item)
                    <tr>
                        <td>{{ $item->Autor }}</td>
                        <td>{{ $item->Titulo }}</td>
                        <td>{{ $item->Editora }}</td>
                        <td>{{ $item->Edicao }}</td>
                        <td>{{ $item->AnoPublicacao }}</td>
                        <td>{{ $item->Valor }}</td>
                        <td>{{ $item->Assuntos }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
