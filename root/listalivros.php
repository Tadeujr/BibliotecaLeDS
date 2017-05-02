<?php include ("cabecalho.php");
	include("conecta.php");
	include("funcoes_biblioteca.php");


	$livros = array();
	$resultado = mysqli_query($conexao, "select * from livros");

		while($livro = mysqli_fetch_assoc($resultado))
		{
			
			$locador = locar($conexao, $livro['id']);
			
			$livro['locador'] = $locador;
			$livros[] = $livro;
		
			
		}

		echo "<center><h2>LIVROS CADASTRADOS</center></h2><br>";

?>

<center><table width="800" class = "table-striped table-bordered">
<tr>
	<td><b> Titúlo <b></td>
	<td><b> Autor</b></td>
	<td><b> Editora</b></td>
	<td><b> Situação</b></td>
	<td><b> Locador</b></td>
</tr>	
<?php 
	foreach ($livros as $livro){
		echo "<tr>
			<td>{$livro['nome']}</td>
			<td>{$livro['autor']}</td>
			<td>{$livro['editora']}</td>
			<td>".if_locado($livro['situacao'])."</td>
			<td>{$livro['locador']}</td>
		</tr>";
	}
?>
</center></table>


<?include ("rodape.php");?>