<?php

class Pessoa{
    public $nome;
    public $matricula;
    public $email;
    
    //Metodos particulares 
    
    
    //Get and Set
    function getNome() {
        return $this->nome;
    }

    function getMatricula() {
        return $this->matricula;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setEmail($email) {
        $this->email = $email;
    }


}
