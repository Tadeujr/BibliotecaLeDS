<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Autor
 *
 * @author Tadeu
 */
class Autor extends Conecta{
   public $autor;
   
   
   function buscaAutor($a){
    $resultado = mysqli_query($this->conexao, "SELECT * FROM `livros` WHERE autor = {$a}");
    $autores = [];
        
        
    while($autor = mysqli_fetch_assoc($resultado)){

        array_push($autores,$autor);
            
    }
        
        return $autores;
   }
   
   function buscarEditora($e){
        $resultado = mysqli_query($this->conexao, "SELECT * FROM `livros` WHERE autor = {$e}");
        $editores = [];
        
        
    while($editor = mysqli_fetch_assoc($resultado)){

        array_push($editores,$editor);
            
    }
        
        return $editores;      
   }
}
