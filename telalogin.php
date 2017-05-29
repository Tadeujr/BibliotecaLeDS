<?php
    include'cabecalho.php';
 ?>

<center><div class="title">
	<h1>Olá Jedi, use a força!</h1>
    </div>
    <form name="input" action="confirmacao.php" method="post">
		<div class="cont-L">
			<label class="title-form">Matricula </label><br>
			<label class="title-form">Senha </label><br>
		</div>

		<div class="cont-R">
			<input type="text" name="mat"><br>
			<input type="password" name="senha">
		</div>
	<div class="divBtnAdm">
    	<button  style="background-color:#006400" class="btn btn-primary" type="submit">Login</button>
    </div></center>
</form>
<?php 
include 'confirmacao.php';
include'rodape.php';?>


