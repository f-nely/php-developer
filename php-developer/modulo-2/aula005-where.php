<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';


// cria conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT id, nome, email, situacao_id FROM usuarios WHERE situacao_id = '2'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "Nome: " . $row_usuario['nome'] . "<br>";
    echo "E-mail: " . $row_usuario['email'] . "<br>";
    echo "Situação id: " . $row_usuario['situacao_id'] . "<br><hr>";
}