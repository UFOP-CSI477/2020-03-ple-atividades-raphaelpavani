<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <title>About city, States and Products</title>
</head>

<body>
  <div class="container">
    <h2 class="blue-text text-darken-2">Estados</h2>
    <table class="highlight responsive-table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Sigla</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($e = $estados->fetch()) {
          echo "
          <tr>
            <td>" . $e["id"] . "</td>
            <td>" . $e["nome"] . "</td>
            <td>" . $e["sigla"] . "</td>
          </tr>
          ";
        } ?>
      </tbody>
    </table>

    <h2 class="blue-text text-darken-2">Produtos</h2>
    <table class="highlight responsive-table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Nome</th>
          <th>Medida</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($e = $produtos->fetch()) {
          echo "
          <tr>
            <td>" . $e["id"] . "</td>
            <td>" . $e["nome"] . "</td>
            <td>" . $e["un"] . "</td>
          </tr>
          ";
        } ?>
      </tbody>
    </table>
  </div>
</body>

</html>