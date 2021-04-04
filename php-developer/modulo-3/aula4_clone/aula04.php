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

        $nota2 = clone $nota;
        $nota2->setDisciplina('História');
        $nota2->setProva(6);
        $nota2->setTrabalho(4);

        echo $nota2->getNota();
    ?>
</body>
</html>

