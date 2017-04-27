<?php
	$nome = $_GET['nome'];
	$idade = $_GET['idade'];
	
	if ($idade > 0){
		if($idade >= 16){
			echo "$nome pode votar.";
		}else{
			echo "$nome não pode votar";
		}
	}else{
		echo "Idade inexistente";
	}
?> 