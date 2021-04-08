<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>
<body>
    <?php
        require_once 'Icurso.php';
        require_once 'CursoGraduacao.php';
        require_once 'CursoPosGraduacao.php';

        $curso = new CursoGraduacao();
        echo $curso->disciplina('Desenvolvimento Web');
        echo $curso->professor('Cesar Szpak');

        $cursoPosGrad = new CursoPosGraduacao();
        echo $cursoPosGrad->disciplina('Rede de Computadores');
        echo $cursoPosGrad->professor('Ruy Ventura');
    ?>
</body>
</html>




