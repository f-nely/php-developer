<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exportar DB</title>
</head>
<body>

    <h1>Exportar base de dados</h1>

    <?php
    
    if (isset($_SESSION['msg'])) {
        echo '<p>' . $_SESSION['msg'] . '</p>';
        unset($_SESSION['msg']);
    }

    ?>

    <form method="POST" action="aula028-proc-exp-bd.php" enctype="multipart/form-data">

        <label for="servidor">Servidor:</label>
        <input type="text" name="servidor" id ="servidor" placeholder="Nome do Servidor"><br><br>

        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" placeholder="Nome do Usuário"><br><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Senha da base de dados"><br><br>

        <label for="dbname">Base de Dados:</label>
        <input type="text" name="dbname" id="dbname" placeholder="Nome da base de dados"><br><br>
        
        <input type="submit" value="Exportar">
        
    </form>

</body>
</html>