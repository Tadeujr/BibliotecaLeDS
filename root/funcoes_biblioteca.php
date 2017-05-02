<?php
/*	1	nome
	2	autor	
	3	edicao	
	4	editora*/

function insereLivro($conexao,$nome,$autor,$editora)// função para add livros no banco
{

		$query = "insert into livros (nome,autor,editora,locado) values('{$nome}','{$autor}','{$editora}','{0}')"; //comando para add no banco MYSQL 
	
	return mysqli_query($conexao,$query);
}

/*	1	nome	
	2	livro	
	3	locacao	
	4	email*/

function insereUser($conexao,$nome,$email)// função para add livros no banco
{

	$query = "insert into usuarios (nome,email) values('{$nome}','{$email}')"; //comando para add no banco MYSQL 
		
	return mysqli_query($conexao,$query);
}

function locarlivro($conexao, $livrox ,$idlivro, $id_user)
{
	$query = "update usuarios set {$livrox} = {$idlivro} where id_user = {$id_user}";

	return mysqli_query($conexao, $query);
}
function livro_disponivel($conexao, $idlivro)
{
	//$users = array();
	$resultado = mysqli_query($conexao, "select * from usuarios");

/*	while($user = mysqli_fetch_assoc($resultado)){
		//$users[] = $user;
		if($user['livro1'] == )
	}*/
}

function if_locado($locado)
{
	if($locado){
		return "Indisponível";
	}
	else{
		return "Disponível";
	}
}

function filllivro($conexao, $id_user)
{
	$array = array();
	$select = "select * from usuarios where id_user = {$id_user}";
		
	$result = mysqli_query($conexao, $select);

	$linha = mysqli_fetch_assoc($result);

	if(is_null($linha['livro1'])){
		return "livro1";
	}
	else if(is_null($linha['livro2'])){
		return "livro2";
	}
	else{
		return "";
	}
}
function locar($conexao, $idlivro)
{
	$select = "select * from usuarios";
	$result = mysqli_query($conexao, $select);
	
	while($linha = mysqli_fetch_assoc($result)){
		
		if($idlivro == $linha['livro1'] || $idlivro == $linha['livro2']){
			$query = "update livros set locador = {$linha['nome']} where id = {$idlivro}";
			mysqli_query($conexao, $query);
			return $linha['nome'];
		}
		else{
			return "Nenhum";
		}
	}


}