<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 Parte 3</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Operadores Aritméticos -->
    <div>

        <?php

        $n1 = $_GET["x"];
        $n2 = $_GET["y"];

        echo "<h3> Valores recebidos: $n1 e $n2 </h3>";

        echo "<br> O valor de $n1<sup>$n2</sup> e " . pow($n1, $n2);

        echo "<br> A raiz quadrada de $n2 é " . sqrt($n2);

        echo "<br> O valor de $n2 arredondado é " . round($n2);

        echo "<br> A parte inteira de $n2 é " . intval($n2);

        echo "<br> O valor de $n1 em dinheiro é " . number_format($n1, 2, ",", ".");


        ?>

    </div>
</body>
</html>