<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $nome = $_GET['nome']; // Nome do estudante
            $nota1 = $_GET['nota1']; // Nota 1
            $nota2 = $_GET['nota2'];// Nota 2
            $nota3 = $_GET['nota3'];// Nota 3
            $faltas = $_GET['faltas'];// Quantidade de faltas
            $notaFinal = ($nota1 + $nota2 + $nota3) / 2;

            if ()

            echo("Estudante: $nome.");
            echo("Nota do 1° Trimestre: $nota1.");
            echo("Nota do 2° Trimestre: $nota2.");
            echo("Nota do 3° Trimestre: $nota3.");
        ?>
    </body>
</html>
