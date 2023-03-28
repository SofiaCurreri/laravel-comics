<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Comics</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
  <main>
    <div class="container d-flex flex-column jumbotron align-items-center justify-content-center text-center">
      {{-- <img class="my-1" src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
      

    </div>
  </main>
</body>

</html>
