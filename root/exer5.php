<?php
	$produto = $_GET['produto'];
	$lstprodutos = array("arroz","café","biscoito","saboneite","chá","trigo","macarrão","gelatina","azeite","açúcar");
	$achou = False;
	
	foreach($lstprodutos as $p)
		if($p==$produto){
			$achou = True; 
		}
	
	if($achou == True){
		echo "$produto<br>Produto encontrado.";
	}else{
		echo"$produto<br>Produto não encontrado.";
	}
	
?>