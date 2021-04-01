<?php
session_start();
include_once('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Crud - Listar</title>
    </head>

    <body>
            <a href="aula022-crud-inserir.php">Cadastrar</a>
            <?php
            echo "<h1>Listar usuários</h1>";
            if (isset($_SESSION['msg'])) {
                echo "<p>" . $_SESSION['msg'] . "</p>";
                unset($_SESSION['msg']);
            }

            $result_qnt_user = "SELECT COUNT(id) AS qnt_usuarios FROM usuarios";
            $resultado_qnt_user = mysqli_query($conn, $result_qnt_user);
            $row_qnt_user = mysqli_fetch_assoc($resultado_qnt_user);

            echo "<h3>Quantidade de usuários: " . $row_qnt_user['qnt_usuarios'] . "</h3>";

            $result_usuarios = "SELECT user.*,
            sit.nome nome_sit,
            nivac.nome nome_niv_ac
            FROM usuarios user
            INNER JOIN situacaos sit ON sit.id = user.situacao_id
            INNER JOIN niveis_acessos nivac ON nivac.id = user.niveis_acesso_id
            ORDER BY id";
            $resultado_usuarios = mysqli_query($conn, $result_usuarios);

            while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
                echo "ID: " . $row_usuario['id'] . "<br>"; 
                echo "Nome: " . $row_usuario['nome'] . "<br>"; 
                echo "E-mail: " . $row_usuario['email'] . "<br>"; 
                echo "Situação: " . $row_usuario['nome_sit'] . "<br>"; 
                echo "Níveis de acesso: " . $row_usuario['nome_niv_ac'] . "<br>"; 
                echo "<a href='aula024-crud-editar.php?id=" . $row_usuario['id'] . "'>Editar</a><br>"; 
                echo "<a href='aula026-crud-apagar.php?id=" . $row_usuario['id'] . "'>Apagar</a><hr>"; 
            }
        ?>
    </body>

</html>