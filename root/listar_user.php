<?php
    include('cabecalho_adm.php');
      require_once'Conecta.php';


	$usuarios = new Conecta();
	
          echo "<br><br><br>";
        echo "<center><h2>USUARIOS CADASTRADOS</center></h2><br>";
        $lista = $usuarios->listaUsuarios();

?>

<center><table width="800" class = "table-striped table-bordered">
	<tr>
		<td><b> Usuário<b></td>
		<td><b> Email</b></td>

	</tr>	
		<?php 
		foreach ($lista as $usuario){
		?>	

	<tr>
			<td><?=$usuario['nome'];?></td>
			<td><?=$usuario['email'];?></td>
	</tr>
		<?php }?>
</center></table>
<?include ("rodape.php");?>
    


