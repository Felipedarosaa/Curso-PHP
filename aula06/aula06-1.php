<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06 Parte 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Operadores de Atribuição -->
    <div>

        <?php

        $preco =  $_GET["p"];
        echo "O preço do produto é R$ $preco";
        $preco += $preco * 10 / 100;

        echo "<br> E o novo preço com 10% de aumento será R$ " . number_format($preco, 2, ",");

        $desconto = $preco - ($preco * 10 / 100);
        echo "<br> E o novo preço com 10% de desconto será R$ " . number_format($preco, 2, ",");


        ?>

    </div>
</body>
</html>