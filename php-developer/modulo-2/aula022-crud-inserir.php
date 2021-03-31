<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud - Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <?php
        if (isset($_SESSION['msg'])) {
            echo "<p>" . $_SESSION['msg'] . "</p>";
            unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="aula023-crud-proc.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <input type="submit" value="Cadastrar">
    </form>

</body>
</html>

