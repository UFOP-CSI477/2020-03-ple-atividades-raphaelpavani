<?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];





if ($nome === "" && $endereco  === "") {
  echo  "Input valid data";
} else {
  echo  "<h1> Your address is $endereco , Mr(Mrs) $nome<h1>";
}



echo "<a href=\"index.html\" >Voltar</a>";
