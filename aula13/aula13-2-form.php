<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 13 Parte 2 (formulário)</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Estrutura de Repetição For -->
    <div>
        <form method="get" action="aula13-2.php">
            <select name="num">
                <?php
                for ($c = 1; $c <= 10; $c++) {
                    echo "<option>$c</option>";
                }
                ?>
            </select>
            <input type="submit" class="botao" value="Tabuada">
        </form>
    </div>
</body>
</html>