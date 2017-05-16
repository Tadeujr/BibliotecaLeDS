<?php

include("conecta.php");
require_once 'usuarioClass.php';
$user = new Pessoa;

$user->nome = $_POST['nome'];
$user->email = $_POST['email'];

$user->inserirusuario($conexao);
	

mysqli_close($conexao);	
?>