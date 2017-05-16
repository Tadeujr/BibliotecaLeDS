<?php 
include ("conecta.php");
include("funcoes_biblioteca.php");
require_once 'livroClass.php';
?>

<?php 
	$livro = new Livro;
	$livro->titulo = $_POST['nome'];
	$livro->autor = $_POST['autor'];
	$livro->editora = $_POST['editora']; 

	$livro->inserelivro($conexao);

	mysqli_close($conexao);
?>