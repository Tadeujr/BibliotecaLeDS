<?php
    require_once 'Jedi.php';
    $jedi = new Jedi();
    if(isset($_POST['mat']) && isset($_POST['senha'])){
        $jedi->verificar_adm($_POST['mat'], $_POST['senha']);
    }
    
            
 ?>

