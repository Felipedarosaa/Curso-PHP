<html lang="pt-br">
<head>

    <?php 
        $txt = isset($_GET["t"]) ? $_GET["t"] : "Texto Genérico";
        $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cores</title>
    <link rel="stylesheet" href="../css/estilo.css">

    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

</head>
<body>

    <!-- Integração HTML5 + PHP -->
    <div>

        <?php
            echo "<span class='texto'>$txt</span>";
        ?>

        <br><br>
        <button><a href="aula08-3.html">Voltar</a></button>

    </div>
</body>
</html>