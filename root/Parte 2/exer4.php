<?php
	function maiorvalor($vet){
	$maior = array($vet[0][0],$vet[0][1]);
	
	for($i=0;$i<count($vet);$i++){
		$produto = $vet[$i][0];
		$valor = $vet[$i][1];
		
		if ($valor > $maior[1]){
			$maior = array($produto,$valor);
			
		}
	}	
	return $maior;	
	}
	
	function menorvalor($vet){
	$produto = "";
	$valor = 0;
	$menor = array($vet[0][0],$vet[0][1]);
	
	for($i=0;$i<count($vet);$i++){
		$produto = $vet[$i][0];
		$valor = $vet[$i][1];
		
		if ($valor < $menor[1]){
			$menor = array($produto,$valor);
			
		}
		
	}	
	return $menor;
	}
	function mediaprodutos($vet){
	$qtd = count($vet);
	$somavalor = 0.0;
	$resultado = 0.0;
	for($i=0;$i<count($vet);$i++){
		$somavalor += $vet[$i][1];
			
	}
	return $resultado = $somavalor / $qtd;
	}	
	
	function imprimeprodutos($vet){
	for($i=0;$i<count($vet);$i++){
		echo $vet[$i][0].":"."\t"." R$ ".$vet[$i][1]."<br>";
			
	}	
	}
	
	$produtos = array(array("arroz",9.99),
				array("café",6.80),
				array("biscoito",2.89),
				array("saboneite",1.15),
				array("chá",2.49),
				array("trigo",2.99),
				array("macarrão",3.20),
				array("gelatina",0.69),
				array("azeite",12.00),
				array("açúcar",7.99));
	
	$maiorproduto = maiorvalor($produtos);
	$menorproduto = menorvalor($produtos);
	$media = mediaprodutos($produtos);
	
	echo "Lista de Produtos e valores:<br>";
	imprimeprodutos($produtos);
	echo"<br>"."Produto mais caro: $maiorproduto[0] Valor: R$ $maiorproduto[1]"."<br>"; //echo menorvalor($produtos)[0];
	echo"<br>"."Produto mais Barato: $menorproduto[0] Valor: R$ $menorproduto[1]"."<br>";
	echo"<br>"."Media de Valores: R$ $media"."<br>";
	
	
?>