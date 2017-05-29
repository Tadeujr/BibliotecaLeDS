<?php include ("cabecalho.php");
?>

<form name="input" action="devolucao.php" method="post">

	<div class="title">
		<h1>Devolução</h1>
	</div>

	<div class="cont-L">
		<label> Id do livro</label><br>
	</div>

	<div class="cont-R">
		<input type="text" name="idlivro"><br>
	</div>

	<div class="divBtn adm">
		<button style="background-color:#006400" class="btn btn-primary divBtn" type="submit">Devolver</button>
		<?php include("retorno.php"); ?>
	</div>
</form>


<?php 
include ("rodape.php");?>

