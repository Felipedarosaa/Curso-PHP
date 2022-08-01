<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15 Parte 1</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Rotinas em PHP – Parte 2 -->
    <div>

        <?php  
            include "aula15-2.php";
            function teste(&$x) {
                $x += 2;
                echo "<p> O valor de X é $x </p>";
            }

            $a = 3;
            teste($a);
            echo "<p> O valor de A e $a </p>";

            ola();
            mostrarValor(4);

            echo "<h2> Finalizando o Programa... </h2>";


        ?>

    </div>
</body>
</html>