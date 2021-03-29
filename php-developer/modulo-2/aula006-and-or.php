<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';


// cria conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
$result_usuario = "SELECT * FROM usuarios WHERE situacao_id = '1' OR niveis_acesso_id = '1'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "Nome: " . $row_usuario['nome'] . "<br>";
    echo "Email: " . $row_usuario['email'] . "<br>";
    echo "Situação id: " . $row_usuario['situacao_id'] . "<br>";
    echo "Niveis acesso id: " . $row_usuario['niveis_acesso_id'] . "<br><hr>";
}