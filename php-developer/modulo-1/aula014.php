<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Do ... While</title>
</head>
<body>
    <?php 
        $a = 11;

        do{
            echo "E-mail enviado: $a <br>";
            $a++;
            //$a = $a + 1
        }while($a <= 10);

    ?>
</body>
</html>