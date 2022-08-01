<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Integração HTML5 + PHP -->
    <div>

        <?php
            $valor = $_GET["v"];
            $raiz = sqrt($valor);

            echo "A Raíz Quadrada de $valor é: ". number_format($raiz, 2);
        ?>

        <br><br>
        <button><a href="aula08-1.html">Voltar</a></button>

    </div>
</body>
</html>