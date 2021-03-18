<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Operadores Lógicos</title>
</head>
<body>
    <?php 
        $a = 10;
        $b = 8;
        $c = 2;

        if (($a == 10) and ($b == 8)) {
            echo "Utilizado AND: Verdadeiro <br>";
        } else {
            echo "Utilizado AND: False <br>";
        }

        if (($a == 10) or ($b == 7)) {
            echo "Utilizado OR: Verdadeiro <br>";
        } else {
            echo "Utilizado OR: False <br>";
        }

        if (($a == 10) xor ($b == 7)) {
            echo "Utilizado XOR: Verdadeiro <br>";
        } else {
            echo "Utilizado XOR: False <br>";
        }

        if (!empty($c)) {
            echo "Utilizado !: Verdadeiro <br>";
        }

        if (($a == 10) && ($b == 8)) {
            echo "Utilizado &&: Verdadeiro <br>";
        } else {
            echo "Utilizado &&: False <br>";
        }

        if (($a == 10) || ($b == 7)) {
            echo "Utilizado ||: Verdadeiro <br>";
        } else {
            echo "Utilizado ||: False <br>";
        }
    ?>
</body>
</html>