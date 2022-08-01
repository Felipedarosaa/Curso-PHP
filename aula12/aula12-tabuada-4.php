<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 Parte 4</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        h1 {
            font: 20pt Arial;
        }
    </style>
</head>
<body>
    
    <div>
        <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 1;
        echo "<h1>Mostrando a Tabuada de $n </h1>";
        for ($c = 1; $c <= 10; $c++) {
            $r = $n * $c;
            echo "$n x $c = $r <br>";
        }
        ?>
        <br />
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>

</body>
</html>