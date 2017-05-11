<?php include ("cabecalho.php");
	include("conecta.php");
	include("funcoes_biblioteca.php");?>

<form name="input" action="devolucao.php" method="post">

	<div class="title">
		<h1>Devolução</h1>
	</div>

	<div class="cont-L">
		<label> Id do Usuario &nbsp&nbsp</label><br>
		<label> Id do livro &nbsp&nbsp</label><br>
	</div>

	<div class="cont-R">
		<input type="text" name="id_user"><br>
		<input type="text" name="idlivro"><br>
	</div>

	<div class="divBtn adm">
		<button style="background-color:#006400" class="btn btn-primary divBtn" type="submit">Devolver</button>
	</div>
</form>

<?php include("retorno.php"); ?>

<?php 
include ("rodape.php");?>

