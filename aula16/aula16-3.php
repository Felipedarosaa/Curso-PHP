<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 Parte 3</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Funções String em PHP (Parte 1) -->
    <div>

        <?php
            $t = "Aqui temos um texto gigante para mostrar o funcionamento de uma função do curso";
            $r = wordwrap($t, 8, "<br>\n", false);
            echo "$r";

        ?>

    </div>
</body>
</html>