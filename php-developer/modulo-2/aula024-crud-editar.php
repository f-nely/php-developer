<?php
session_start();
include_once('conexao.php');
$id  = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
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

    <a href="aula021-crud-listar.php">Listar</a>
    <h1>Editar Usuário</h1>
    <?php
        if (isset($_SESSION['msg'])) {
            echo "<p>" . $_SESSION['msg'] . "</p>";
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="aula025-crud-proc.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <input type="submit" value="Editar">
    </form>

</body>
</html>