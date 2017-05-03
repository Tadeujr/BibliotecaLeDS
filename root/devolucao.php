<?php include ("cabecalho.php");
	include("conecta.php");
	include("funcoes_biblioteca.php");?>

<html>
<h1>Devolução</h1>
<center><div class="formulario">
	<form name="input" action="devolucao.php" method="post">
	<div id="conteudo-right">
		<label class="title-form"> Id do livro :<input type="text" name="idlivro"></label><br>
	</div>
     <button  style="background-color:#006400" class="btn btn-primary" type="submit"> Devolver </button>
</center></form>
</html>

<?php include("retorno.php"); ?>

<?php 
include ("rodape.php");?>
