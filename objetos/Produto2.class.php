<?php

class Produto
{
	public $Codigo;
	public $Descricao;
	public $Preco;
	public $Quantidade;

	function ImprimirEtiqueta(){
	echo 'Codigo: '. $this->Codigo. "<br>";
	echo 'Descricao: '. $this->Descricao. "<br>";
	echo 'Preco: '. $this->Preco. "<br>";
	echo 'Quantidade: '. $this->Quantidade. "<br>";

    }
}



?>