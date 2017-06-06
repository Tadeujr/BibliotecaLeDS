<?php
require_once'../class/Conecta.php';
require_once'../class/Pessoa.php';

$banco = new Conecta();
$pessoa = new Pessoa();

$nome = $_POST['nome'];
$email = $_POST['email'];
$mat = $_POST['mat'];

$pessoa->setNome($nome);
$pessoa->setEmail($email);
$pessoa->setMatricula($mat);


$banco ->addPessoa($pessoa->getNome(), $pessoa->getMatricula(), $pessoa->getEmail());