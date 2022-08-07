<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito" rel="stylesheet">
        <!-- CSS da Aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/normalize.css">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    </head>
    <body class="antialiased">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" 
                aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/create">Cadastro</a>
                    </li>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        </nav>
    </header>
    
    <div class="container">
      @if (session('menssage-success'))
          <div class="alert alert-warning alert-dismissible fade show" id="alert-create" role="alert">
              {{ session('menssage-success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      @if (session('menssage-update'))
          <div class="alert alert-warning alert-dismissible fade show" id="alert-delete" role="alert">
              {{ session('menssage-update') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
      @if (session('menssage-delete'))
          <div class="alert alert-warning alert-dismissible fade show" id="alert-delete" role="alert">
              {{ session('menssage-delete') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif

      @yield('content')
      
    </div>
    <footer>
    </footer>
    {{-- JavaScript da Aplicação --}}
    <script src="/js/script.js"></script>
    {{-- JavaScript Bundle with Popper --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    {{-- Ionicons / https://ionic.io/ionicons/usage --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>