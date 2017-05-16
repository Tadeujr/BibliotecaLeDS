<?php

function situacao($conexao, $idlivro,$sit)
{
	$query = "update livro set situacao = {$sit} where id_livro = {$idlivro}";
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