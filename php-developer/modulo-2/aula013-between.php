<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT * FROM usuarios WHERE id BETWEEN 1 AND 3";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuarios = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuarios['id'] . "<br>";
    echo "Nome: " . $row_usuarios['nome'] . "<br><hr>";
}