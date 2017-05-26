<?php include ("cabecalho_adm.php");?>

<div class="title">
	<h1>Cadastro de Usuário</h1>
</div>
<div class="formulario">
	<form name="input" action="cadastro_user.php" method="post">
		<div class="cont-L">
			<label class="title-form">Nome </label><br>
			<label class="title-form">Email </label><br>
                        <label class="title-form">Matricula </label><br>
		</div>

		<div class="cont-R">
			<input type="text" name="nome"><br>
			<input type="email" name="email"><br>
                        <input type="text" name="mat"><br>
		</div>
		</div>
	<div class="divBtnAdm">
    	<button  style="background-color:#006400" class="btn btn-primary" type="submit">Cadastrar</button>
    </div>
</form>
<?php include ("rodape.php"); 