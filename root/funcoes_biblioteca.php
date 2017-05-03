<?php
/*	1	nome
	2	autor	
	3	edicao	
	4	editora*/

function insereLivro($conexao,$nome,$autor,$editora)// função para add livros no banco
{

		$query = "insert into livros (nome,autor,editora,situacao,locador) values('{$nome}','{$autor}','{$editora}','{0}', NULL)"; //comando para add no banco MYSQL 
	
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

function situacao($conexao, $idlivro,$sit)
{
	$query = "update livros set situacao = {$sit} where id = {$idlivro}";
	return mysqli_query($conexao, $query);
}
function devolver($conexao, $idlivro)
{
	$select = "select * from usuarios";
	$result = mysqli_query($conexao, $select);

	while($linha = mysqli_fetch_assoc($result)){
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
function locador($conexao, $idlivro)
{
	$select = "select * from usuarios";
	$result = mysqli_query($conexao, $select);
	
	while($linha = mysqli_fetch_assoc($result)){
		if($linha['livro1'] == $idlivro || $linha['livro2'] == $idlivro){
			$query = "update livros set locador = {$linha['nome']} where id = {$idlivro}";
		}
		else{
			$query = "";
		}

		return mysqli_query($conexao, $query);

	}
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