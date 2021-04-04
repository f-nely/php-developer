<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>
<body>
    <?php
        require 'Nota.php';
        $nota = new Nota();

        $nota->setNota('Cesar Szpak', 'Matemática', 5, 2);
        echo $nota->getNota();
    ?>
</body>
</html>

