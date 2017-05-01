<?php include ("cabecalho.php");
	include("conecta.php");
	include("funcoes_biblioteca.php");


	$livros = array();
	$resultado = mysqli_query($conexao, "select * from livros");
		while($livro = mysqli_fetch_assoc($resultado))
		{
			$livros[] = $livro;
		}

		echo $livros[0]['id'] ."<center><h2>LIVROS CADASTRADOS</center></h2><br>";


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
			<td>".if_locado($livro['locado'])."</td>
			<td>{$livro['editora']}</td>
		</tr>";
	}
?>
</center></table>


<?include ("rodape.php");?>