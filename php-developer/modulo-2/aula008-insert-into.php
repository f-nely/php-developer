<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';


// cria conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$result_usuario = "INSERT INTO usuarios 
(nome, email, situacao_id, niveis_acesso_id, created)
VALUES
('Carlos', 'carlos@celke.com.br', '2', '3', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    echo "Inserido com sucesso!<br>";
    echo "ID: " . mysqli_insert_id($conn);
}