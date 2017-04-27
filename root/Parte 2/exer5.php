<?php
	function buscaproduto($arquivo,$produto){
	$achou = False;
	
	while(!feof($arquivo)){
		$linha = fgets($arquivo);
		
		if (rtrim($linha) == $produto){ // rtrim() remove \t, \n 
			$achou = True;
		}
	
	}
	return $achou;
	}
	$nomedoarquivo = $_GET['nomedoarquivo'];
	$produto = $_GET['produto'];
	$arquivo = fopen($nomedoarquivo,"r");
	$busca = buscaproduto($arquivo,$produto);
	
	if($busca == true){
		echo "Produto encontrado";
	}else{
		echo "Produto não encontrado";
	}
	
?>