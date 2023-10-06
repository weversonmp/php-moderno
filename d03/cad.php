<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>

    <main>
        <h1>Conversor de Moedas v1.0</h1>

        <?php
        $numero = floatval($_GET["numero"] ?? "sem valor");
        // $real = number_format($numero, 2, ",", ".")  ?? "sem valor";
        // $dolar = number_format($numero / 5.22, 2, ",", ".");



        // echo "<p>Seus R$ $numero equivalem a <strong>US$ $dolar</strong></p>";


        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo " Seus " . numfmt_format_currency($padrao, $numero, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $numero / 5.22, "USD") . "<strong>";
        echo "<p><strong>*Cotação fixa de R$ 5,22</strong> informada diretamente no código</p>";
        ?>
        <a href="./index.html"><input type="button" value="⬅️ Voltar"></a>
    </main>
</body>

</html>