<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '704802';
$dbname = 'celke';

// criar a conexão
$conn = mysqli_connect($servidor, $usuario, $senha);

if (!$conn) {
    die("Falha na conexão " . mysqli_connect_error());
} else {
    echo "Conexão realizada com sucesso";
}
