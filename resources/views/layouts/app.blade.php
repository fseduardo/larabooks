<!doctype html>
<html lang="pt-br" >
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Eduardo F. Souza">

    <title>Livros</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>

  <body class="d-flex flex-column h-100">

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container">
            <a class="navbar-brand" href="#">Livros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('livro.index') }}">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('autor.index') }}">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('assunto.index') }}">Assuntos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('relatorio.geral') }}" target="_blank">Relatório</a>
                    </li>
                </ul>
                
            </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12">
                    @if (flash()->message)
                        <div class="alert {{ flash()->class ?: 'alert-success'  }}  alert-dismissible fade show" role="alert">
                            {{ flash()->message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                
                    {{-- Display Laravel validation error messages --}}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    {{-- Rest of your content --}}
                </div>
                
            </div>
        </div>
        

        @yield('content')
    </main>

    <footer class="footer mt-5 py-3 bg-body-tertiary">
        <div class="container text-center">
            <span class="text-body-secondary">Dev: Eduardo Souza - @fseduardo 2023.</span>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    @yield('js')
</body>
</html>
