<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Celke</title>
</head>
<body>
    <?php
        require_once 'Cheque.php';
        require_once 'ChequeComum.php';
        require_once 'ChequeEspecial.php';

        $chequeComum = new ChequeComum(100.10, 'comum');
        echo $chequeComum->calcularJuros();

        $chequeEspecial = new ChequeEspecial(100.10, 'especial');
        echo $chequeEspecial->calcularJuros();
    ?>
</body>
</html>



