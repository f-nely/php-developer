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

            $result_usuarios = "SELECT * FROM usuarios";
            $resultado_usuarios = mysqli_query($conn, $result_usuarios);

            while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
                echo "ID: " . $row_usuario['id'] . "<br>"; 
                echo "Nome: " . $row_usuario['nome'] . "<br>"; 
                echo "E-mail: " . $row_usuario['email'] . "<br>"; 
                echo "Situação: " . $row_usuario['situacao_id'] . "<br>"; 
                echo "Níveis de acesso: " . $row_usuario['niveis_acesso_id'] . "<br><hr>"; 
            }
        ?>
    </body>

</html>