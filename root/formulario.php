<?php include ("cabecalho_adm.php");?>

<div class="title">
	<h1>Cadastro de Livro</h1>
</div>
	<form name="input" action="cadastrarlivro.php" method="post">
		<div class="cont-L">
			<label class="title-form">Titulo </label><br>
			<label class="title-form">Autor </label><br>
			<label class="title-form"> Editora </label><br>
		</div>

		<div class="cont-R">
			<input type="text" name="titulo"><br>
			<input type="text" name="autor"><br>
			<input type="text" name="editora">
		</div>
	<div class="divBtnAdm">
    	<button  style="background-color:#006400" class="btn btn-primary" type="submit">Cadastrar</button>
    </div>
</form>

<?php include ("rodape.php");
