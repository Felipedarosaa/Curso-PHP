<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 Parte 4</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Estrutura de Repetição Do While -->
    <div>

        <form method="get" action="aula12-tabuada-4.php">
            Número:
            <select name="num">     
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    echo "<option>$i</option>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada" />
        </form>

    </div>
</body>
</html>