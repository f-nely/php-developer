<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuarios = "SELECT SUM(qnt_acessos) AS qtn_acessos FROM usuarios WHERE situacao_id = 1";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuarios = mysqli_fetch_assoc($resultado_usuarios);

echo "Total de acesso ao site: " . $row_usuarios['qtn_acessos'] . "<br>";
