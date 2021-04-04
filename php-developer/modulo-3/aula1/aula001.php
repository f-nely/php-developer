<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PHP - Celke</title>
</head>
<body>
    <?php
    if (phpversion() >= 7.0):
        echo phpversion() . ' - Olá mundo';
    else:
        echo phpversion() . ' - Necessário atualizar o PHP';
    endif;

    echo '<br>';
    echo ini_get('date.timezone') . '<br>';
    echo date('d/m/Y H:i:s') . '<br>';
    ?>
</body>
</html>
