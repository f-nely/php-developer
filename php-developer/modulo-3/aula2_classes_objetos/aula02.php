<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>
<body>
    <?php
        require_once 'Usuario.php';
        $usuario = new Usuario();
        echo $usuario->getDadosUser('Cezar Szpak', 'cesar@celke.com.br');
    ?>
</body>
</html>
