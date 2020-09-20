<?php

require_once 'connection.php';

$estados = $connection->query("SELECT * FROM estados");
$cidades = $connection->query("SELECT * FROM cidades");

//var_dump($estados->fetchAll());
//View
require 'estadosView.php';
