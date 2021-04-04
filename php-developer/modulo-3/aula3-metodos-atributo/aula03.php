<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke - Métodos e Atributos</title>
</head>
<body>
    <?php
        require_once 'User.php';
        $user = new User();
        $user->setNome('Cesar');
        $user->setEmail('cesar@celke.com.br');

        echo $user->getNome() . "<br>";
        echo $user->getEmail();
    ?>
</body>
</html>
