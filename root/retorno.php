<?php
	include ("conecta.php");
	require_once 'livroClass.php';

	$livro = new Livro;
	if(isset($_POST['idlivro'])){
		$livro->id_livro = $_POST['idlivro'];

		$livro->devolverlivro($conexao, $livro->id_livro);
	}

?>