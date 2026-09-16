<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
    <body font-size: "20px">
        <?php
            $nome=$_GET["nome"]; //Nome do estudante.
            $nota=$_GET["nota"]; //Pontuação do estudante.

            echo("Nome: $nome.<br>"); //Nome do estudante.
            echo("Pontuação: $nota.<br>"); //Pontuação inicial.

            $nota += 10; //Acrescenta 10 pontos a nota.
            echo("<br>Pontuação: $nota.<br>");
            $nota -= 5; //Retira 5 pontos da nota.
            echo("<br>Pontuação: $nota.<br>");
            $nota *= 2; //Dobra a pontuação.
            echo("<br>Pontuação: $nota.<br>");
            $nota /= 2; //Divide a pontuação por 2.
            echo("<br>Pontuação: $nota.<br>");
            $nota++; //Acrescenta mais 1 ponto.
            echo("<br>Pontuação: $nota.<br>");
            $nota--; //Retira 1 ponto.

            echo("<br>Nova pontuação: $nota."); //Pontuação final.
        ?>
    </body>
</html>
