<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 Parte 3</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Operadores Relacionais -->
    <div>
        <?php
            $n1 = $_GET ["n1"];
            $n2 = $_GET ["n2"];
            $media = ($n1 + $n2)/2;

            echo "A média entre $n1 e $n2 é: $media <br>";
            echo "A situação do aluno é: ". (($media < 6) ? "Reprovado!" : "Aprovado!"); // CONCATENANDO
        ?>

    </div>
</body>
</html>