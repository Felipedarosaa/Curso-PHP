<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05 Parte 2</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Operadores Aritméticos -->
    <div>

        <?php

        $n1 = 3;
        $n2 = 2;

        $media = ($n1 + $n2) / 2;

        echo "A soma vale " . ($n1 + $n2);
        echo "<br> A subtração vale " . ($n1 - $n2);
        echo "<br> A multiplicação vale " . ($n1 * $n2);
        echo "<br> A divisão vale " . ($n1 / $n2);
        echo "<br> O módulo vale " . ($n1 % $n2);
        echo "<br><br> A média vale $media";

        ?>

    </div>
</body>
</html>