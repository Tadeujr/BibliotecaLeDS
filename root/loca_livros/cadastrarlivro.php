<?php 
include ("conecta.php");
include("funcoes_biblioteca.php");
?>

<?php 

	$nome = $_POST['nome'];
	$autor = $_POST['autor'];
	$editora = $_POST['editora']; 

		
		

		if(insereLivro($conexao,$nome, $autor,$editora))
		{
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=formulario_adm.php'>";
			echo "<label><b>Livro Cadastrado com Sucesso!</b></label>";
		}
		else
		{
			echo "<label><b>NAO FOI CADASTRADO</b></label>";
				
		}

	mysqli_close($conexao);
?>