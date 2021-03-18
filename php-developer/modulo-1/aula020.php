<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>GET</title>
</head>
<body>
    <form action="aula020_proc.php" method="GET">

        <label for="nome_cliente">Nome:</label>
        <input type="text" name="nome_cliente" id="nome_cliente" placeholder="Digite o nome" required><br><br>

        <label for="email_cliente">Email:</label>
        <input type="email" name="email_cliente" id="email_cliente" placeholder="Digite o e-mail" required><br><br>

        <input type="submit" value="Cadastrar">
        
    </form>
</body>
</html>