<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
 <body>
<?php include"../view/cabecalho_adm.php";
 require_once '../class/conecta.php';
 
 $locador = new Conecta();
 	
    echo "<br><br><br>";
    echo "<center><h2>Locadores</center></h2><br>";
    
?>
     <div class="tabela">
    <table width="800" class = "table-striped table-bordered">
        <tr>
                <td><b> Matrícula </b></td>
                <td><b> Nome </b></td>
                <td><b> Email </b></td>
                <td><b> Livros </b></td>
                
                
        </tr>	
        <?php 
        $lista = $locador->listarLocadores();
                //print_r($livros);
        foreach ($lista as $locador){
                echo "<tr>
                        <td>{$locador['matricula']}</td>
                        <td>{$locador['nome']}</td>
                        <td>{$locador['email']}</td>
                        <td>{$locador['titulo']}</td>
                </tr>";
        }     
        ?>
     </div>
        
    </center></table>


<?include ("../view/rodape.php");?>
    </body>
</html> 



