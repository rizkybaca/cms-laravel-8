<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIA SMK</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="/css/cover.css" rel="stylesheet">
    
  </head>
  <body class="d-flex h-100 text-center text-white bg-dark">
    <div class="container d-flex w-100 h-100 p-3 mx-auto flex-column">
      @include('partials.navbar')

      @yield('container')

    </div>
  </body>
</html>
