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
            $nota01 = isset($_GET["nota1"]) ? $_GET["nota1"] : "nota não inserida";
            $nota02 = isset($_GET["nota2"]) ? $_GET["nota2"] : "nota não inserida";
            $media = ($nota01 + $nota02)/2;

            if($media >= 7) {
               echo "Você foi aprovado com média $media";
            }
            else if ($media < 7 && $media > 5) {
                echo "Você está de recuperação com média $media";
            }
            else {
                echo "Você foi reprovado com média $media";
            }
        ?>
        
    </div>
</body>
</html>