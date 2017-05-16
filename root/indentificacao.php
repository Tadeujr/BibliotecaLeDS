<?php
	include("conecta.php");
	require_once 'usuarioClass.php';
	require_once 'livroClass.php';

	$livro = new Livro;
	$user = new Pessoa;
	if(isset($_POST['id_user']) && isset($_POST['idlivro']))
	{
		$user->id_user = $_POST['id_user'];
		$livro->id_livro = $_POST['idlivro'];
	
		$livrox = filllivro($conexao, $user->id_user);
		$user->locarlivro($conexao, $livrox, $livro->id_livro);
	}


?>