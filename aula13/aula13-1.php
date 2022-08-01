<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 Parte 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>

<body>

    <!-- Estrutura de Repetição For -->
    <div>

        <?php
            // Ordem Crescente
            for($i=1; $i<=10; $i++) {
                echo "$i ";
            }

            echo "<br>";
            // Ordem Decrescente
            for($i=10; $i>=1; $i--) {
                echo "$i ";
            }

            echo "<br>";
            // Pular de 5 em 5
            for($i=0; $i<=50; $i+=5) {
                echo "$i ";
            }

            echo "<br>";
            // Ordem Decrescente pulando de 2 em 2
            for ($i=20; $i>=0; $i-=2) {
                print "$i ";
            }

            echo "<br>"
        ?>

    </div>
</body>
</html>