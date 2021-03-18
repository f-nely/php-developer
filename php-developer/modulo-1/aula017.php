<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Funções</title>
</head>
<body>
    <?php
        $codigo = "cursophp";
        echo promocao($codigo);

        function promocao(string $codigo = null)
        {
            if ($codigo == "cursophp") {
                $msg = "Código Válido <br>";
            } else {
                $msg = "Código Inválido <br>";
            }
            return $msg;
        }
        $codigo = "cursophp1";
        echo promocao($codigo);
        echo promocao();
    ?>
</body>
</html>