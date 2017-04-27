<?php
	function imc($peso,$altura){
		$imc = ($peso)/pow($altura,2);
		return $imc;
	}
	//Dados pessoa 1
	$nome1 = $_GET['nome1'];
	$peso1 = $_GET['peso1'];
	$altura1 = $_GET['altura1'];
	$imc1 = imc($peso1,$altura1);
	$resultado = array($nome1,$imc1);
	
	//Dados pessoa 2
	$nome2 = $_GET['nome2'];
	$peso2 = $_GET['peso2'];
	$altura2 = $_GET['altura2'];
	$imc2 = imc($peso2,$altura2);
	
	if ($imc2 < $imc1){
		$resultado[0] = $nome2;
		$resultado[1] = $imc2;
	}
	
	//Saida
	echo "$resultado[0]";
	echo "<br>Menor IMC:$resultado[1]";
	
	
?>