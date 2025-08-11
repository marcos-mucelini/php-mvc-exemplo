<?php
/**
 * ----------------------------------------------------------------------------
 * Layout Principal do Projeto
 * ----------------------------------------------------------------------------
 *
 * Este arquivo funciona como um "template base" para o sistema.
 * Ele define a estrutura principal (HTML, head, menu, footer, etc.) que é compartilhada
 * por todas as páginas, evitando duplicação de código.
 *
 * O conteúdo dinâmico de cada página (por exemplo, lista de usuários ou formulário
 * de cadastro) é renderizado na variável $conteudo, que cada página define.
 *
 * Dessa forma, o layout fornece o cabeçalho, rodapé, estilos e o container
 * principal, e as páginas injetam apenas o conteúdo específico que muda.
 *
 * Vantagem: Separação de responsabilidades e DRY (Don't Repeat Yourself).
 */

// Garante que $conteudo sempre exista, evitando erros se não for definido
$conteudo = $conteudo ?? '';

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Biblioteca de componentes pré-estilizados DaisyUI -->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
        <!-- Tailwind CSS via CDN para estilização rápida e moderna -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        
        <title>Exemplo MVC</title>
    </head>
    <body>
        <div>
            <?= $conteudo ?>
        </div>
    </body>
</html>

