<?php
	$produto = $_GET['produto'];
	$lstprodutos = array("arroz","café","biscoito","saboneite","chá","trigo","macarrão","gelatina","azeite","açúcar");
	$cont = 9; // função que conta elementos count(parametro)  não sei se posso usar agora
	$achou = False;
	
	while($cont>=0){
		if($lstprodutos[$cont] == $produto){
			$achou = True; 
		}
		$cont--;
	}
	if($achou == True){
		echo "$produto<br>Produto encontrado.";
	}else{
		echo"$produto<br>Produto não encontrado.";
	}
?>