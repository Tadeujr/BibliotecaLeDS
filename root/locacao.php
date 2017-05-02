<?php include ("cabecalho.php");
	include("conecta.php");
	include("funcoes_biblioteca.php");?>

<html>
<h1>Locação</h1>
<center><div class="formulario">
	<form name="input" action="locacao.php" method="post">
	<div id="conteudo-right">
		<label class="title-form"> Id do usuario :<input type="text" name="id_user"></label><br>
		<label class="title-form"> Id do livro :<input type="text" name="idlivro"></label><br>
	</div>
     <button  style="background-color:#006400" class="btn btn-primary" type="submit"> Locar </button>
</center></form>
</html>

<?php include("indentificacao.php"); ?>

<?php 
include ("rodape.php");?>
