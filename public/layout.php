<?php

$conteudo = $conteudo ?? '';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        
        <title>Exemplo MVC</title>
    </head>
    <body>
        <div>
            <?= $conteudo ?>
        </div>
    </body>
</html>

