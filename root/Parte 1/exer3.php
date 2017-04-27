<?php
	$nome = $_GET['nome'];
	$sexo = $_GET['sexo'];
	$idade = $_GET['idade'];
	
	if ($sexo == "M"){
		if($idade >= 18){
			echo "$nome já fez alistamento militar.";
		}
		if($idade < 18){
			echo "$nome não fez alistamento militar.";
		}		
	}else{
		echo "$nome nunca fará alistamento militar.";
		}
?> 