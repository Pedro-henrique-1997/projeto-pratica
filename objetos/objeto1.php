<?php

include "Produto1.class.php";

$produto = new Produto;

$produto->Codigo = 4001;
$produto->Descricao = "DVD South Park";
$produto->Preco = 7.89;
$produto->Quantidade = 8;

var_dump($produto);

?>