<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 10 Parte 3 (Pessoal)</title>
    <link rel="stylesheet" href="../css/estilo.css">

    <style>
         span.estado{
         color: red;
         }
    </style>
</head>
<body>

    <!-- Estrutura Condicional Switch -->
    <div>

        <?php
            $e = isset($_GET["est"]) ? $_GET["est"] : 0;

            switch($e) {
                case 1: 
                    echo "O <span class='estado'> Acre </span> se localiza na região <span class='estado'> Norte </span>";
                    break;
                case 2:
                    echo "O <span class='estado'> Amapá</span> se localiza na região <span class='estado'> Norte </span>";
                    break;
                case 3:
                    echo "O <span class='estado'> Amazonas</span> se localiza na região <span class='estado'> Norte </span>";
                    break;
                case 4:
                    echo "O <span class='estado'> Pará</span> se localiza na região <span class='estado'> Norte </span>";
                    break;
                case 5:
                    echo "O <span class='estado'> Rondônia</span> se localiza na região <span class='estado'> Norte </span>";
                    break;
                case 6:
                    echo "O <span class='estado'> Roraima</span> se localiza na região <span class='estado'> Norte </span>";
                    break;
                case 7:
                    echo "O <span class='estado'> Tocantins</span> se localiza na região <span class='estado'> Norte </span>";
                    break;
                    
                default;
            }
        ?>
        <br><br><br>
      <a href="aula10-3.html" class="botao">Voltar</a>

    </div>
</body>
</html>