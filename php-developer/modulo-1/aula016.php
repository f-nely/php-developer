<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Foreach</title>
</head>
<body>
    <?php 
       $alunos = ['A', 'B', 'C', 'D'];
       foreach($alunos as $aluno) {
           //var_dump($alunos);
           //var_dump($aluno);
           echo "Nome: $aluno <br>";
       }
    ?>
</body>
</html>