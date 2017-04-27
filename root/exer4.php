<h1> Calculo de IMC</h1>
<?php
	$peso = $_GET['peso'];
	$altura = $_GET['altura'];
	$imc = ($peso)/pow($altura,2);
	
	if($imc <18){
		echo "seu IMC: $imc<br>Magresa";
	}
	if($imc >= 18 && $imc <25){
		echo "seu IMC: $imc<br>Normal";
	}
	if($imc >=25 && $imc < 30){
		echo "seu IMC: $imc<br>Sobrepeso";
	}
	if($imc >= 30 && $imc < 35){
		echo"seu IMC: $imc<br>Obesidade grau I."; 
	}
	if($imc >= 35 && $imc < 40){
		echo"seu IMC: $imc<br>Obesidade grau II."; 
	}
	if($imc >= 40){
		echo"seu IMC: $imc<br>Obesidade grau III (Obesidade Morbida)"; 
	}
	

?>