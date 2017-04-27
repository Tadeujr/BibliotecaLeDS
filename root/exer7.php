<?php
	$produto = $_GET['produto'];
	$lstprodutos = array("arroz","café","biscoito","saboneite","chá","trigo","macarrão","gelatina","azeite","açúcar");
	$achou = False;
		
	for($i=0;$i<=9;$i++){
		if($lstprodutos[$i] == $produto){
			$achou = True; 
		}
		$i++;
	}
	
	if($achou == True){
		echo "$produto<br>Produto encontrado.";
	}else{
		echo"$produto<br>Produto não encontrado.";
	}
?>
