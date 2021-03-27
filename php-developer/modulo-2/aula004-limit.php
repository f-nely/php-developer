<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';


// cria conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

/* $result_usuario = "SELECT id, nome, email FROM usuarios LIMIT 2";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "Nome: " . $row_usuario['nome'] . "<br>";
    echo "Email: " . $row_usuario['email'] . "<br><hr>";
} */

$result_usuario = "SELECT id, nome, email FROM usuarios LIMIT 2 OFFSET 2";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "Nome: " . $row_usuario['nome'] . "<br>";
    echo "Email: " . $row_usuario['email'] . "<br><hr>";
}