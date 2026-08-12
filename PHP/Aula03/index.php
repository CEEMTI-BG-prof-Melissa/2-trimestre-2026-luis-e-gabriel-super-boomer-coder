<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Aula 3 - Operadores Aritméticos </title>
    </head>
    <body>
        <?php
            // Criação das variáveis:
            $preco = 120;
            $quant = 3;
            $desc = 30;
            $parc = 2;

            echo "Valor total da compra: " .($preco * $quant);
            echo "<br> Valor após o desconto: " .(($preco * $quant) - $desc);
            echo "<br> valor de cada parcela: " .((($preco * $quant) - $desc) / $parc);
            echo "<br> Valor após taxa de R$ 15,00: ".((($preco * $quant) - $desc) / $parc) + 15;
            echo "<br> Resto da Divisão: ".((($preco * $quant) - $desc) / $parc)%2;
        ?>
    </body>
</html>