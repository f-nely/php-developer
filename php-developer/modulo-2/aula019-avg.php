<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT AVG(qnt_acessos) AS qnt_acessos FROM usuarios";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuario = mysqli_fetch_assoc($resultado_usuarios);

echo "Média de Acesso: " . $row_usuario['qnt_acessos'] . "<br>";