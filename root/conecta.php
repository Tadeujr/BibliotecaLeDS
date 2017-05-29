<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conecta
 *
 * @author Tadeu
 */
class Conecta {
    protected $conexao;
           
   
    function __construct() {
        $this->conexao = mysqli_connect('localhost','root','usbw','biblioteca');
    }
    
    
    public function listaLivros(){
        
        $resultado = mysqli_query($this->conexao, "select * from livro");
        $livros = [];
        
        
        while($livro = mysqli_fetch_assoc($resultado)){

            array_push($livros,$livro);
            
        }
        
        return $livros;
    }
    
    public function listaUsuarios() {
        $resultado = mysqli_query($this->conexao,"select * from usuario");
        $usuarios = [];
        
        while($usuario = mysqli_fetch_assoc($resultado)){
            
            array_push($usuarios,$usuario);
            
            
        }
        return $usuarios;
    }
    
    public function addPessoa($n,$m,$e){
       
        if(mysqli_query($this->conexao,"insert into usuario (nome,email,matricula) values('{$n}','{$e}',{$m})"))
		{
			echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=formulario.php'>";
			echo "<label><b>Usuário cadastrado com Sucesso!</b></label>";

		}else{
			echo "Erro no cadastro, por favor verifique os campos";
		}
    }

    public function if_locado($locado)
    {
        if($locado)
        {
            return "Indisponível";
        }
        else
        {
            return "Disponível";
        }
    }
    
    public function listarLocadores(){
        
        $resultado = mysqli_query($this->conexao,"select * from usuario INNER join livro on (livro.fk_locador = usuario.matricula)");
        $pessoas = [];
        
        while($pessoa = mysqli_fetch_assoc($resultado)){
            
            array_push($pessoas, $pessoa);
           
        }
        
        return $pessoas;
        
    }
    
    

}
