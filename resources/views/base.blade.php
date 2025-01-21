<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="./resources/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <header class="text-white">
      <nav class="navbar navbar-expand-lg bg-dark text-white">
          <div class="container-fluid">
              <a class="navbar-brand text-white" href="#">GestStud.</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto d-flex gap-3">
                      <li class="nav-item">
                          <a class="nav-link text-white" href="{{ route('student.index') }}">Accueil</a>
                      </li>
                       <!-- Vérifier si on est sur les pages create ou edit -->
                    @if (!in_array(Route::currentRouteName(), ['student.create', 'student.edit']))
                    <li class="nav-item">
                        <a class="nav-link text-white me-5 active" href="{{ route('student.create') }}">Ajouter un étudiant</a>
                    </li>
                @endif
                  </ul>
              </div>
          </div>
      </nav>
  </header>

     <main class="bg-light m-5 py-1 px-4">
        @yield('contenu')
     </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
