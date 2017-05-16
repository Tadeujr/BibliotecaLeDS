<?php
//include("funcoes_biblioteca.php");//Perguntar a Calhau se eh melhor deixar as funcoes de SQL separadas ou juntar na classe !!!
class Pessoa{
	var $id_user;
	var $nome;
	var $identificacao;
	var $email;

	function inserirusuario($conexao)
	{
		if(mysqli_query($conexao,"insert into usuarios (nome,email) values('".$this->nome."','".$this->email."')"))
		{
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=formulario_user.php'>";
			echo "<label><b>Usuario cadastrado com Sucesso!</b></label>";

		}else{
			echo "Erro no cadastro, por favor verifique os campos";
		}
		
	}
	//Nao está funcionando
	function locarlivro($conexao,$livrox,$idlivro)
	{
		if($livrox != ""){
			if( mysqli_query($conexao,"update usuarios set {$livrox} = {$idlivro} where id_user = ".$this->id_user."")){
				mysqli_query($conexao, "update livro set situacao = 1 where id_livro = {$idlivro}");//Perguntar a calhau sobre isso
				echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=locacao.php'>";
				echo "<label class='divBtnMessage'><b>OPERAÇÃO FEITA COM SUCESSO</b></label>";
			}	
			else{
				echo "<label class='divBtnMessage'><b>ERRO NA OPERAÇÃO</b></label>";	
			}
		}
		else{
			echo "<label class='divBtnMessage'><b>Esse usuario já locou DOIS livros</b></label>";
		}
	}
}


?>