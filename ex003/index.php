<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        /* $num = 0x1A;
        echo "O valor da variável é $num"; */

        $num = (int) "900";
        var_dump($num); //coerção.

    ?>
</body>
</html>