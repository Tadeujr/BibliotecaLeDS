<title>Calculo IMC></title>
<h1> Calculo de IMC</h1>
<?php
	$peso = $_GET['peso'];
	$altura = $_GET['altura'];
	$imc = ($peso)/pow($altura,2);
	
	echo $imc;
?>