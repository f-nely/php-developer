<?php
include_once('conexao.php');
$id  = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuarios = "SELECT * FROM usuarios WHERE id = '$id' LIMIT";
$resultado_usuarios = mysqli_query($conn, $result_usuarios);
$row_usuario = mysqli_fetch_assoc($resultado_usuarios);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud - Cadastrar</title>
</head>
<body>
    
</body>
</html>