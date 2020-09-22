<?php

require "../vendor/autoload.php";

use App\Database\AdapterSQLite;
use App\Database\Connection;


$aux = new Connection(new AdapterSQLite);
$connection = $aux->getAdapter()->open();
$estados = $aux->getAdapter()->getEstados($connection);
$cidades = $aux->getAdapter()->getCidades($connection);
$produtos = $aux->getAdapter()->getProdutos($connection);

require_once "../App/View/dadosView.php";
