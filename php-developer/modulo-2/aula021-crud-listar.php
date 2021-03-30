<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Crud - Listar</title>
    </head>

    <body>
        <?php
            $servidor = "localhost";
            $usuario = "root";
            $senha = "704802";
            $dbname = "celke";

            $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

            $result_usuarios = "SELECT user.*,
            sit.nome nome_sit,
            nivac.nome nome_niv_ac
            FROM usuarios user
            INNER JOIN situacaos sit ON sit.id = user.situacao_id
            INNER JOIN niveis_acessos nivac ON nivac.id = user.niveis_acesso_id";
            $resultado_usuarios = mysqli_query($conn, $result_usuarios);

            while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
                echo "ID: " . $row_usuario['id'] . "<br>"; 
                echo "Nome: " . $row_usuario['nome'] . "<br>"; 
                echo "E-mail: " . $row_usuario['email'] . "<br>"; 
                echo "Situação: " . $row_usuario['nome_sit'] . "<br>"; 
                echo "Níveis de acesso: " . $row_usuario['nome_niv_ac'] . "<br><hr>"; 
            }
        ?>
    </body>

</html>