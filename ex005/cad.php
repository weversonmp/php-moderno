<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <script src="index.js"></script>
</head>

<body>


    <main>
        <pre>
        <?php
        setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

        $_SESSION["teste"] = "FUNCIONOU";

        echo "<h1>Superglobal Cookie</h1>";
        var_dump($_COOKIE);

        echo "<h1>Superglobal Session</h1>";
        var_dump($_SESSION);

        echo "<h1>Superglobal Env</h1>";
        var_dump($_ENV);
        // echo var_dump(getenv());

        // foreach (getenv() as $env => $value) {
        //     echo "<p>$env - $value<\p>";
        // }

        echo "<h1>Superglobal GLOBALS</h1>";
        var_dump($GLOBALS);

        ?>
    </main>
</body>

</html>