<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 Parte 4</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Operadores Relacionais -->
    <div>

        <?php
            $ano = $_GET ["an"];
            $idade = 2022 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos. ";

            $tipo = ($idade>=18 && $idade<65) ? "Obrigatòrio" : "Não Obrigatório";
            echo "E dessa forma seu voto é $tipo";
        ?>

    </div>
</body>
</html>