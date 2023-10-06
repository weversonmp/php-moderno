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
        <h1>Analisador de Número Real</h1>

        <?php
        $num = $_POST["n"] ?? 0;

        echo "<p>Analisando o número <strong>" . number_format($num, 3, ",", ".") . "</strong> informado:</p>";

        $int = (int) $num;
        $fra = $num - $int;
        
        echo "<ul><li>A parte inteira do número é <strong>". number_format($int, 0, "," ,".") ."</strong></li>";
        echo "<li>A parte inteira do número é <strong>" . number_format($fra, 3, "," ,".") . "</strong></li></ul>";
        
        ?>

        <a href="./index.html"><input type="button" value="⬅️ Voltar"></a>
    </main>
</body>

</html>