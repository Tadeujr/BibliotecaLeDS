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

?>	
