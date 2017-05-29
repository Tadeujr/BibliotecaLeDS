<?php
	require_once 'Padawan.php';

	$livro = new Padawan;
	if(isset($_POST['idlivro'])){

		$livro->devolverlivro($_POST['idlivro']);
	}

?>