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
        <form>
            <?php
            $randNum = rand(0, 100);
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            echo "<p>O valor gerado foi <strong>$randNum</strong></p>";
            ?>
            <button type="submit">🔁 Gerar outro</button>
        </form>
    </main>
</body>

</html>