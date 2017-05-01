<?php include ("cabecalho.php");
	include("conecta.php");
	include("funcoes_biblioteca.php");?>

<html>
<h1>Locação</h1>
<center><div class="formulario">
	<form name="input" action="locacao.php" method="post">
	<div id="conteudo-right">
		<label class="title-form"> Insira seu Nome :<input type="text" name="nome"></label><br>
		<label class="title-form"> Id do livro :<input type="text" name="idlivro"></label><br>
	</div>
     <button  style="background-color:#006400" class="btn btn-primary" type="submit"> Locar </button>
</center></form>
</html>

<?php
	if(isset($_POST['nome']) && isset($_POST['livro'])){
		$nome = $_POST['nome'];
		$idlivro = $_POST['idlivro'];

		if(locarlivro($conexao, $idlivro, $nome)){
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=locacao.php'>";
			echo "<label><b>OPERAÇÃO FEITA COM SUCESSO</b></label>";
		}
		else{
			echo "<label><b>ERRO NA OPERAÇÃO</b></label>";	
		}
	}

?>

<?php 
include ("rodape.php");?>
