<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
    <body>
        <?php
           include ("cabecalho.php");
           require_once'Conecta.php';
          $livros = new Conecta();
         
          
        ?>

        <center><table width="800" class = "table-striped table-bordered">
        <tr>
                <td><b> ID <b></td>
                <td><b> Titúlo <b></td>
                <td><b> Autor</b></td>
                <td><b> Editora</b></td>
                <td><b> Situação</b></td>
        </tr>	
        <?php 
        $lista = $livros->listaLivros();
                //print_r($livros);
       echo "<br><br><br>";
       
       echo "<h1>Lista de Livros</h1>";
        foreach ($lista as $livro){
                echo "<tr>
                        <td>{$livro['id_livro']}</td>
                        <td>{$livro['titulo']}</td>
                        <td>{$livro['autor']}</td>
                        <td>{$livro['editora']}</td>
                        <td>".$livros->if_locado($livro['situacao'])."</td>
                        
                </tr>";
        }  
        //<td>".if_locado($banco['situacao'])."</td>    
        ?>
    </center></table>


<?include ("rodape.php");?>
    </body>
</html>
