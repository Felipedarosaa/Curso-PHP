<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 09 Parte 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Estrutura Condicional if -->
    <div>

        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos. <br>";

        if($i >= 18) {
            $v = "já pode Votar";
            $d = "já pode Dirigir";
        } else if($i >= 16 && $i < 18) {
            $v = "tem voto opcional";
            $d = "não pode dirigir";
        } 
        
        else {
            $v = "não pode Votar";
            $d = "não pode Dirigir";
        }
        echo "Com essa idade você $v e também $d";
        ?>


    </div>
</body>
</html>