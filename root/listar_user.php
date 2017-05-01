<?php include ("cabecalho_adm.php");
	include("conecta.php");


	$usuarios = array();
	$resultado = mysqli_query($conexao, "select * from usuarios");
		while($usuario = mysqli_fetch_assoc($resultado))
		{
			$usuarios[] = $usuario;
		}

		echo "<center><h2>USUARIOS CADASTRADOS</center></h2><br>";


?>

<center><table width="800" class = "table-striped table-bordered">
	<tr>
		<td><b> Usuário<b></td>
		<td><b> Email</b></td>

	</tr>	
		<?php 
		foreach ($usuarios as $usuario){
		?>	

	<tr>
			<td><?=$usuario['nome'];?></td>
			<td><?=$usuario['email'];?></td>
	</tr>
		<?php }?>
</center></table>


<?include ("rodape.php");?>