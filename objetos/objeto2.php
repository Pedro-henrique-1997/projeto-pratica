<?php

include "Produto2.class.php";

$produto2 = new Produto;
$produto3 = new Produto;
$produto4 = new Produto;

$produto2->Codigo = 4001;
$produto2->Descricao = "DVD South Park";
$produto2->Preco = 7.89;
$produto2->Quantidade = 8;

$produto3->Codigo = 4002;
$produto3->Descricao = "Esquadrao suicida";
$produto3->Preco = 10.39;
$produto3->Quantidade = 10;

$produto4->Codigo = 4003;
$produto4->Descricao = "Godzilla vs Kong";
$produto4->Preco = 8.24;
$produto4->Quantidade = 4;

$produto2->ImprimirEtiqueta();
echo "<br>";
$produto3->ImprimirEtiqueta();
echo "<br>";
$produto4->ImprimirEtiqueta();


?>