<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Jedi
 *
 * @author Tadeu
 */
require_once'conecta.php';
class Jedi extends Conecta{
    
    
function addLivro($t,$e,$a){
        
    if(mysqli_query($this->conexao,"insert into livro (titulo,editora,autor) values('{$t}','{$e}','{$a}')"))
        {
            echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=formulario_user.php'>";
            echo "<label><b>Livro cadastrado com Sucesso!</b></label>";

    }else{
            echo "Erro no cadastro, por favor verifique os campos";
        }
    }
   
    public function verificar_adm($matricula, $senha){
        $result = mysqli_query($this->conexao, "select * from usuario where matricula = {$matricula}");
        $adm = mysqli_fetch_assoc($result);
        if($adm['adm']){
            if($senha == $adm['senha_adm']){
                echo "Redirecionando...";
                echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=listar_user.php'>";
            }
            else{
                echo "<label class='divBtnMessage'><b>Login inválido</b></label>";
                echo "<meta HTTP-EQUIV='refresh' CONTENT='1;URL=telalogin.php'>";
            }
        }
        else{
            echo "<label class='divBtnMessage'><b>Usuario não é um adm!</b></label>";
            echo "<meta HTTP-EQUIV='refresh' CONTENT='2;URL=telalogin.php'>";
        }
    }
}

