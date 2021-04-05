<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>
<body>
    <?php
        require_once 'Cliente.php';
        $cliente = new Cliente();
        $cliente->setEndereco('Avenida das Americas');
        $cliente->setBairro('Barra da Tijuca');

        echo $cliente->verEndereco();
    ?>
</body>
</html>


