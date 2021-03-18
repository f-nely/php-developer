<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Passagem de parâmetros por valor e referência</title>
</head>
<body>
    <?php
        echo "<h4>Passagem por valor</h4>";
        function salario($num)
        {
            $num += 5;
            echo "Salário com aumento: $num <br>";
        }
        $salario = 8200;
        salario($salario);
        echo "Salário sem aumento: $salario <br>";

        echo "<h4>Passagem por referência</h4>";
        function salarioa(&$num)
        {
            $num += 10;
            echo "Salário com aumento: $num <br>";
        }

        $salarioa = 8200;
        salarioa($salarioa);
        echo "Salário com aumento 'Referência': $salarioa <br>";
    ?>
</body>
</html>