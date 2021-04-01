<?php

session_start();

include_once('conexao.php');

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$result_usuario = "DELETE FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_affected_rows($conn)) {
    $_SESSION['msg'] = "<span style='color: rgb(0, 255,0);'>Usuário apagado com sucesso</span>";
    header("Location: aula021-crud-listar.php");
} else {
    $_SESSION['msg'] = "<span style='color: rgb(255, 0,0);'>Usuário não foi apagado com sucesso</span>";
    header("Location: aula021-crud-listar.php");
}