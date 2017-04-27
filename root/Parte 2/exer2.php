<?php
	function distancia($pontoA,$pontoB){
		$distancia = pow((pow($pontoB[0] - $pontoA[0],2) +pow($pontoB[1] - $pontoA[1],2) ),0.5);
		return $distancia;
	}
	
	$p1 = array($x1=$_GET['x1'],$y1=$_GET['y1']);
	$p2 = array($x2=$_GET['x2'],$y2=$_GET['y2']);
	$p3 = array($x3=$_GET['x3'],$y3=$_GET['y3']);
	$menord = 0;
	$dp1p2 = distancia($p1,$p2);
	$dp1p3 = distancia($p1,$p3);
	$dp2p3 = distancia($p2,$p3);
	
	if($dp1p2 <= $dp1p3 && $dp1p2 <= $dp2p3){
		$menord = $dp1p2;
		echo "o ponto AB tem a menor distância $menord"."<br>";
	}
	if($dp1p3 <= $dp2p3 && $dp1p3 <= $dp1p2){
		$menord = $dp1p3;
		echo "o ponto AC tem a menor distância $menord"."<br>";
	}
	if($dp2p3 <= $dp1p3 && $dp2p3 <= $dp1p2 ){
		$menord = $dp2p3;
		echo "o ponto BC tem a menor distância $menord"."<br>";
	}

	
	
	
	
	



	
?>