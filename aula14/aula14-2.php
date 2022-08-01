<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 Parte 2</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Rotinas em PHP – Parte 1-->
    <div>

        <?php
            function soma($a, $b) {
                return $a+$b;
            }

            $x = 3;
            $y = 4;
            $r = soma($x, $y);
            echo "A soma entre $x e $y é igual a $r";


        ?>

    </div>
</body>
</html>