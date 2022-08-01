<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 Parte 2</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Estrutura de Repetição While -->
    <div>
        <form method="get" action="aula11-2-2.php">
            <?php 
            $c = 1;
            while($c <= 5) {
                echo "Valor 1: <input type='number' name='v$c' max='100' min='0' value='0'> <br>";
                $c++;
            }
            ?>

             <input type="submit" value="Enviar" class="botao">
        </form>

    </div>
</body>
</html>