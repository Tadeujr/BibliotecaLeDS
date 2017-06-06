<?php
    include('../view/cabecalho_adm.php');
      require_once'../class/Conecta.php';


	$usuarios = new Conecta();
	
          echo "<br><br><br>";
        echo "<center><h2>USUARIOS CADASTRADOS</center></h2><br>";
        $lista = $usuarios->listaUsuarios();

?>

<center><table width="800" class = "table-striped table-bordered">
	<tr>    
                <td><b> Matrícula </b></td>
		<td><b> Usuário<b></td>
		<td><b> Email</b></td>

	</tr>	
            <?php 
		foreach ($lista as $usuario){
			

                        echo"<tr>
                            <td>{$usuario['matricula']}</td>
                            <td>{$usuario['nome']}</td>
                            <td>{$usuario['email']}</td>
                        </tr>";
                }
            ?>
</center></table>
<?include ("../view/rodape.php");?>
    


