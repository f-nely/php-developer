<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT * FROM usuarios WHERE niveis_acesso_id IN (1,2)";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "Nome: " . $row_usuario['nome'] . "<br>";
    echo "Nível Acesso: " . $row_usuario['niveis_acesso_id'] . "<br><hr>";
}