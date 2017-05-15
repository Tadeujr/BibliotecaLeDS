<?php include ("cabecalho.php");
	include("conecta.php");
	include("funcoes_biblioteca.php");


	$livros = array();
	$resultado = mysqli_query($conexao, "select * from livro");

		while($livro = mysqli_fetch_assoc($resultado))
		{
			
			$livros[] = $livro;
			
		}

		echo "<center><h2>LIVROS CADASTRADOS</center></h2><br>";

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
	foreach ($livros as $livro){
		echo "<tr>
			<td>{$livro['id_livro']}</td>
			<td>{$livro['titulo']}</td>
			<td>{$livro['autor']}</td>
			<td>{$livro['editora']}</td>
			<td>".if_locado($livro['situacao'])."</td>
		</tr>";
	}
?>
</center></table>


<?include ("rodape.php");?>