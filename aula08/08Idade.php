<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idades</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>

    <!-- Integração HTML5 + PHP -->
    <div>

        <?php
            $nome = isset($_GET ["nome"]) ? $_GET["nome"] : "[Não Informado]";
            $ano =  isset($_GET ["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset($_GET ["sexo"]) ? $_GET["ano"] : "[Sem Sexo]";
            $idade = date("Y") - $ano;

            echo "$nome é $sexo e tem $idade anos.";
        ?>

        <br><br>
        <button><a href="aula08-2.html">Voltar</a></button>

    </div>
</body>
</html>