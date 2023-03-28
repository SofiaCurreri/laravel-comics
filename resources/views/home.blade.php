<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Comics</title>

  {{-- CDN Bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
  @vite('resources/scss/app.scss') 
  {{-- ^ non funziona --}}
</head>

<body>
  <header>
    @include('partials._header')
  </header>
  <main>   
      {{-- <img class="my-1" src="{{ Vite::asset('resources/img/logo.png') }}" alt=""> --}}
      

  </main>
</body>

</html>
