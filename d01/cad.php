<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
        $numero = $_GET["numero"] ?? "sem numero";
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        echo "<p>O número escolhido foi <strong>$numero</strong></p>";
        echo "<p>O seu antecessor é <strong>$antecessor</strong></p>";
        echo "<p>O seu sucessor é <strong>$sucessor</strong></p>";
        ?>
        <a href="./index.html"><input type="button" value="⬅️ Voltar"></a>
    </main>
</body>
</html>