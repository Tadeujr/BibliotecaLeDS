<?php
	require_once '../class/Padawan.php';

	$livro = new Padawan;
	if(isset($_POST['idlivro'])){

		$livro->devolverlivro($_POST['idlivro']);
	}

?>