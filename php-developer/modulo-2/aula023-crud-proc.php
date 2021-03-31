<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$nome = $_POST['nome'];
$email = $_POST['email'];

$result_usuarios = "INSERT INTO usuarios 
(nome, email, situacao_id, niveis_acesso_id, created)
VALUES
('$nome', '$email', 2, 3, NOW())";

$resultado_usuarios = mysqli_query($conn, $result_usuarios);
