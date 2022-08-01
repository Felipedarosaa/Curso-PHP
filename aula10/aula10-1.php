<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 Parte 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Estrutura Condicional Switch -->
    <div>
        <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

            switch ($o) {
                case 1: 
                    $r = $n * 2;
                    break;
                case 2:
                    $r = $n ^ 3;
                    break;
                case 3: 
                    $r = sqrt($n); // $n ^ (1/2);
            }

            echo "O resultado da operação solicitada foi $r";

        ?>
        <br> <br>
        <a href="aula10-1.html" class="botao">Voltar</a>
                                                    

    </div>
</body>
</html>