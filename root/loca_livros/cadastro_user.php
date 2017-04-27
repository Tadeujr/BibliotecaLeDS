<?php
include("funcoes_biblioteca.php");
include("conecta.php");
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	if(insereUser($conexao,$nome,$email))
	{
		echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=formulario_user.php'>";
		echo "<label><b>Usuario cadastrado com Sucesso!</b></label>";

	}else{
		echo "Erro no cadastro, por favor verifique os campos";
	}

mysqli_close($conexao);	
?>