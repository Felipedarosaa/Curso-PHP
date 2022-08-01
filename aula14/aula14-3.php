<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 Parte 3</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Rotinas em PHP – Parte 1 -->
    <div>

        <?php

            function soma() {
                $p = func_get_args();
                $t = func_num_args();
                $soma = 0;
                for($i=0; $i<$t; $i++) {
                    $soma += $p[$i];
                }
                return $soma;
            }

            $r = soma(3, 5, 2, 7, 8, 10);
            echo "A soma dos valores é $r";


        ?>

    </div>
</body>
</html>