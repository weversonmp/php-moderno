<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
        echo "É uma prazer te conhecer <strong>$nome $sobrenome</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar a Página Anterior</a></p>
    </main>
</body>
</html>