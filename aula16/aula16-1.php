<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 Parte 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Funções String em PHP (Parte 1) -->
    <div>

        <?php
            $prod = "leite";
            $pr = 4.5;
            // echo "O $prod custa R$ " . number_format($pr, 2);
            printf ("O %s está custando R$ %.2f", $prod, $pr);


        ?>

    </div>
</body>
</html>