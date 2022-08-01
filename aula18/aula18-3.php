<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 18 Parte 3</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Vetores e Matrizes – Parte 1 -->
    <div>
        <pre>
        <?php
        //     $v = array (0 => 5,
        //                 4 => 9,
        //                 3 => 8,
        //                 7 => 7);  
        // unset($v[0]);          
        // print_r($v);
        $v = array("nome" => "Felipe",
                "idade" => 18,
                "peso" => 70);
                foreach($v as $k => $c) {
                echo "O campo $k possui o contúdo $c </br> ";
                }
        ?>
        </pre>

    </div>
</body>
</html>