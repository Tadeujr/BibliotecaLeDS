<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Padawan
 *
 * @author Tadeu
 */
require_once'conecta.php';
class Padawan extends Conecta{
    
    
    public function locarLivro($matricula,$livrox, $idlivro)
    {
		if($livrox != ""){
			if( mysqli_query($this->conexao,"update usuarios set {$livrox} = {$idlivro} where matricula = ".$matricula."")){
				mysqli_query($this->conexao, "update livros set situacao = 1 where id_livro = {$idlivro}");
                                mysqli_query($this->conexao, "update livros set fk_locador = {$matricula} where id_livro = {$idlivro}");
				
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

	//Funcao para definir se o livro locado vai ser o livro1 ou livro2 do banco de dados, se os 2 preenchidos retornará vazio.
	public function filllivro($matricula)
	{
		$array = array();
		$select = "select * from usuarios where matricula = {$matricula}";
			
		$result = mysqli_query($this->conexao, $select);

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

	public function findBook($idlivro)
	{
		$select = "select * from usuarios";
		$result = mysqli_query($this->conexao, $select);

		while($linha = mysqli_fetch_assoc($result))
		{
			if($idlivro == $linha['livro1'] ){
				$book = "livro1";
			}
			else if($idlivro == $linha['livro2']){
				$book = "livro2";
			}
			$query = "update usuarios set {$book} = NULL where matricula = {$linha['matricula']}";
			return mysqli_query($this->conexao, $query);
		}
	}

	public function devolverlivro($idlivro)
	{
		if($this->findBook($idlivro)){
			mysqli_query($this->conexao, "update livros set situacao = 0 where id_livro = {$idlivro}");
                        mysqli_query($this->conexao, "update livros set fk_locador = NULL where id_livro = {$idlivro}");
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=devolucao.php'>";
			echo "<label class='divBtnMessage'><b>OPERAÇÃO FEITA COM SUCESSO</b></label>";
		}
		else{
			echo "<label class='divBtnMessage'><b>ERRO NA OPERAÇÃO</b></label>";	
		}
	}
        
}
