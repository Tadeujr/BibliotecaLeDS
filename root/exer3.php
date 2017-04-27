
<?php
	function somavetor($vet){
		$soma = 0;
		
		for($i = 0;$i < sizeof($vet);$i++){
			$soma+= $vet[$i];
		}
		return $soma;	
	}
	
	$vet = array(1,2,3,4,5,6);
	$resultado = somavetor($vet);
	echo"Total: $resultado";
	
?> 