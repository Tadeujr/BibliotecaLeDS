<?php
	if(isset($_POST['id_user']) && isset($_POST['idlivro'])){
		$id_user = $_POST['id_user'];
		$idlivro = $_POST['idlivro'];
		
		$livrox = filllivro($conexao, $id_user);
		if($livrox != ""){
			if(locarlivro($conexao, $livrox ,$idlivro, $id_user)){
				echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=locacao.php'>";
				echo "<label><b>OPERAÇÃO FEITA COM SUCESSO</b></label>";
			}	
			else{
				echo "<label><b>ERRO NA OPERAÇÃO</b></label>";	
			}
		}
		else{
			echo "<label><b>Esse usuario já locou DOIS livros</b></label>";
		}
		
	}

?>