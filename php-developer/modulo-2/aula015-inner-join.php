<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "SELECT user.id, user.email, user.niveis_acesso_id 
FROM usuarios AS user";
$resultado_usuario = mysqli_query($conn, $result_usuario);

while ($row_usuario = mysqli_fetch_assoc($resultado_usuario)) {
    echo "ID: " . $row_usuario['id'] . "<br>";
    echo "E-mail: " . $row_usuario['email'] . "<br>";
    echo "Níveis de acesso id: " . $row_usuario['niveis_acesso_id'] . "<br><hr>";
}