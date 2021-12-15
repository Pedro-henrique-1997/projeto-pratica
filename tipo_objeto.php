<?php
class Computador{

	public $cpu;
	public $status;
	function ligar(){
		echo "Ligando o computador a {$this->cpu}...";
	}

	function desligar(){
		echo "Desligando o pc";
	}
}

$obj = new Computador;
	$obj->cpu = "500Mhz";
	$obj->ligar();
	$obj->desligar();

$notebook = new Computador;
$notebook->status = 900;
if($notebook->status > 500){
	echo "PC muito quente";
}
?>