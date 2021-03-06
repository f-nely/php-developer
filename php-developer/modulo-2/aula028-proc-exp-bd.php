<?php

session_start();

// recebendo os dados do formulário
$servidor = filter_input(INPUT_POST, 'servidor', FILTER_SANITIZE_STRING);
$usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$dbname = filter_input(INPUT_POST, 'dbname', FILTER_SANITIZE_STRING);

// criar a conexão com banco de dados
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// incluir o arquivo que gera o backup
include_once('aula029-ger-back.php');

header("Location: aula027-form-exp-bd.php");