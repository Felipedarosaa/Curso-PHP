<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 Parte 3 (Pessoal)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Estrutura de Repetiçaõ For -->
    <div>

    <!-- Números Primos -->
        <form action="" method="get">
            Digite um numero: <input type="number" name="number" /><br />
            <input type="submit" value="Testar" />
        </form>
        <?php
        $n = $_GET["number"];
        $divisores = 0;

        for ($c = 2; $c < $n; $c++)
            if ($n % $c == 0) {
                echo "Multiplo de $c <br>";
                $divisores++;
            }

        if ($divisores) echo "Não é primo, tem $divisores divisores além de 1 e ele mesmo";
        else   echo "É primo!";
        ?>
    </div>
</body>
</html>