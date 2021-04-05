<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
        require_once 'Cliente.php';
        require_once 'ClientePessoaFisica.php';
        $cliente = new Cliente();
        $cliente->setEndereco('Avenida das Americas');
        $cliente->setBairro('Barra da Tijuca');

        echo $cliente->verEndereco();

        $clientePf = new ClientePessoaFisica();
        $clientePf->setCpf('327.904.560-62');
        $clientePf->setNome('Cesar');
        $clientePf->setEndereco('Av. Nossa Senhora de Copacabana');
        $clientePf->setBairro('Copacabana');
        echo $clientePf->verEndereco();

    ?>
</body>
</html>


