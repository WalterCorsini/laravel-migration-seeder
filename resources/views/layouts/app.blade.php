<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <!-- direttive di vite in tutte le pagine che usano questo file -->
  @vite('resources/js/app.js')
</head>

<body>
  @include('partials.header') 
  <main>
    {{-- dove verrà inserito il file della pagina che lo importa --}}
    @yield('content')
  </main>

</body>

</html>