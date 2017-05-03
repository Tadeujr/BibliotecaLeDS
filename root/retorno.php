<?php

	if(isset($_POST['idlivro'])){
		$idlivro = $_POST['idlivro'];

		if(devolver($conexao, $idlivro)){
			situacao($conexao, $idlivro, 0);
				echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=locacao.php'>";
				echo "<label><b>OPERAÇÃO FEITA COM SUCESSO</b></label>";
		}
		else{
			echo "<label><b>ERRO NA OPERAÇÃO</b></label>";	
		}
	}

?>