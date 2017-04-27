<?php include ("cabecalho_adm.php");?>

<html>
<h1>Cadastro de Livro</h1>
<center><div class="formulario">
	<form name="input" action="cadastro_user.php" method="post">
		<div class="form-group" id="conteudo-right">
			<label class="title-form">Nome :</label>
				<input type="text" name="nome"><br>
			<label class="title-form">Email :</label>
				<input type="email" name="email"><br>
		</div>

     <button  style="background-color:#006400" class="btn btn-primary" type="submit">Cadastrar</button>
</center></form>
</html>

<?php include ("rodape.php");?>