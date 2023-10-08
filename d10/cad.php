<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $valor1 = $_GET['v1'] ?? '';
    $peso1 = $_GET['p1'] ?? '';
    $valor2 = $_GET['v2'] ?? '';
    $peso2 = $_GET['p2'] ?? '';
    ?>

    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" min="1900" require value="<?= $valor1 ?>">

            <label for="ano">1º Peso</label>
            <input type="number" name="ano" id="ano" min="1900" require value="<?= $peso1 ?>">

            <input type="submit" value="Qual será minha idade?">

        </form>
    </main>
    <section>
        <?php
        $ma = ($valor1 + $valor2) / 2;
        $mp = (($peso1 * $valor1) + ($peso2 * $valor2)) / ($peso1 + $peso2);
        ?>

        <h2>Resultado</h2>

        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($ma, 2, ",", ".") ?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso1 . " e " . $peso2 ?> é igual a <?= number_format($mp, 2, ",", ".") ?>.</li>
        </ul>
    </section>


</body>

</html>