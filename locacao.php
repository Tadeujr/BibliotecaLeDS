<?php include ("cabecalho.php");
	include("conecta.php");
	?>

<form action="locacao.php" method="post">

	<div class="title">
		<h1>Locação</h1>
	</div>

	<div class="cont-L">
		<label> Matricula do Usuário </label><br>
		<label> Id do livro </label><br>
	</div>

	<div class="cont-R">
		<input type="text" name="matricula"><br>
		<input type="text" name="idlivro"><br>
	</div>

	<div class="divBtn">
		<button style="background-color:#006400" class="btn btn-primary divBtn" type="submit">Locar</button>
		<?php include("indentificacao.php"); ?>
	</div>
	
</form>


<?php 
include ("rodape.php");?>

