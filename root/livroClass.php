<?php
class Livro{
	var $id_livro;
	var $titulo;
	var $autor;
	var $editora;

	function inserelivro($conexao)
	{
		if( mysqli_query($conexao,"insert into livro (titulo,autor,editora,situacao,locador) values('".$this->titulo."','".$this->autor."','".$this->editora."','{0}', NULL)"))
		{
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=index.php'>";
			echo "<label><b>Livro Cadastrado com Sucesso!</b></label>";
		}
		else
		{
			echo "<label><b>NAO FOI CADASTRADO</b></label>";
				
		}
	}

	function findBook($conexao, $idlivro)
	{
		$select = "select * from usuarios";
		$result = mysqli_query($conexao, $select);

		while($linha = mysqli_fetch_assoc($result))
		{
			if($idlivro == $linha['livro1'] ){
				$book = "livro1";
			}
			else if($idlivro == $linha['livro2']){
				$book = "livro2";
			}
			$query = "update usuarios set {$book} = NULL where id_user = {$linha['id_user']}";
			return mysqli_query($conexao, $query);
		}
	}

	function devolverlivro($conexao, $idlivro)
	{
		if($this->findBook($conexao, $idlivro)){
			mysqli_query($conexao, "update livro set situacao = 0 where id_livro = {$idlivro}");
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=devolucao.php'>";
			echo "<label class='divBtnMessage'><b>OPERAÇÃO FEITA COM SUCESSO</b></label>";
		}
		else{
			echo "<label class='divBtnMessage'><b>ERRO NA OPERAÇÃO</b></label>";	
		}
	}
}


?>