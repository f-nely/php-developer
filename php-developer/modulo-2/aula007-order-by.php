<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';


// cria conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT * FROM usuarios ORDER BY id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuarios = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuarios['id'] . "<br>";
    echo "Nome: " . $row_usuarios['nome'] . "<br>";
    echo "E-mail: " . $row_usuarios['email'] . "<br><hr>";
}