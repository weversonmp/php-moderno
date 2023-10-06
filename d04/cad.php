<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>

    <main>
        <h1>Conversor de Moedas 2.0</h1>

        <?php
        require_once "cotacaoApi.php";

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $numero = $_GET["numero"] ?? "sem valor"; 
        $real = number_format($numero, 2, ",", ".")  ?? "sem valor";
        $dolar = number_format($numero / $cotacao, 2, ",", "."); 

        echo "<p>Seus " . numfmt_format_currency($padrao, $numero, "BRL") . " equivalem a <strong>US$ $dolar</strong></p>";
        echo "<p><strong>*Cotação de " . numfmt_format_currency($padrao, $cotacao, "USD") .  "</strong> obtida no site do Banco Central</p>";
        ?>

        <a href="./index.html"><input type="button" value="⬅️ Voltar"></a>
    </main>
</body>

</html>