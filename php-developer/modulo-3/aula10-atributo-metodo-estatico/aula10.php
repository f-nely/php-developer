<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>
<body>
    <?php
        require_once 'Disciplina.php';

        $disciplina = new Disciplina('Cesar', 2, 6);
        echo $disciplina->situacao();
        echo Disciplina::situacaoAluno();
    ?>
</body>
</html>





