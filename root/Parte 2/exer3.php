<?php 
	$vet = array(array("João","silva",25),
				array("Edlaine","Braga",26),
				array("Tadeu","Junior",26),
				array("Icaro","Gavaza",27),
				array("Lucas","Gomes",19));
	
	for($i = 0;$i<count($vet);$i++){
		for($j=0;$j<count($vet[0]);$j++){
			echo "\t".$vet[$i][$j]."\t";
			
		}echo "<br>";
	}
	
?>