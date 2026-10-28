<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title> Luís&Gabriel </title>
    </head>
    <body font-size="20px">
        <?php
            $nome = "Ana";
            $idade = 17;
            $nota = 8;
            $frequencia = 80;
            $autorizacao = true;

            $situacao = $nota >= 6 && $frequencia >= 75 ? "Aprovado" : "Reprovado";
            $inscricao = $idade >= 18 || $autorizacao == true ? "Inscrição permitida" : "Inscrição não permitida";
            $destaque = $nota >+ 9 && $frequencia >= 90 ? "Aluno destaque" : "Aluno regular";

            echo("Nome: $nome;<br>");
            echo("Idade: $idade;<br>");
            echo("Nota: $nota;<br>");
            echo("Frequência: $frequencia%;<br>");
            echo("Situação do estudande: $situacao;<br>");
            echo("Situação da iscrição: $inscricao;<br>");
            echo("Classificação como aluno: $destaque;<br>");
        ?>
    </body>
</html>