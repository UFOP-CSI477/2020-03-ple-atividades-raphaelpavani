<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <style type="text/css">
    * {
      font-family: 'Roboto', sans-serif;
    }

    .nav {
      text-align: center;
      margin-left: 100px;

    }
  </style>
  <title>Generic Store!</title>
</head>

<body>
  <div class="container-fluid">
    <nav class="   navbar-light bg-light">
      <a href="{{route('generico')}}" class="navbar-brand logo">
        <img src="https://www.flaticon.com/svg/static/icons/svg/123/123226.svg" alt="logo">Alfinha
      </a>
      <ul class="nav">
        <li class="nav-item"><a href="{{route('generico')}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{route('produtos.index')}}" class="nav-link">Produtos</a></li>
        <li class="nav-item"><a href="/cidades" class="nav-link">Cidades</a></li>
        <li class="nav-item"><a href="/vendas" class="nav-link">Vendas</a></li>

      </ul>
    </nav>

    @yield('conteudo')
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>