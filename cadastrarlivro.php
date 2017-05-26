<?php
require_once 'Jedi.php';
$livro = new Jedi();
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editora = $_POST['editora']; 

$livro->addLivro($titulo,$editora,$autor);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

