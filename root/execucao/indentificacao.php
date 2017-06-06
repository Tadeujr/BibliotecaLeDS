<?php
	require_once '../class/Padawan.php';
	$padawan = new Padawan;

	if(isset($_POST['idlivro']) && isset($_POST['matricula']))
	{	
		$livrox = $padawan->filllivro($_POST['matricula']);
		$padawan->locarLivro($_POST['matricula'],$livrox,$_POST['idlivro']);
	}

?>