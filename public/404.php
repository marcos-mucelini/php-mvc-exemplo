<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
         <!-- Biblioteca de componentes Tailwind chamada DaisyUI (Possui componentes prontos) -->
        <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
         <!-- Tailwind CSS via CDN para estilização -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        
        <title>Página Não Encontrada</title>
    </head>
    <body>
        <!-- Container centralizado para o conteúdo -->
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content text-center">
                <div class="max-w-md">
                <!-- Título principal 404, bem grande e em destaque -->
                <h1 class="text-5xl font-bold">Erro 404!</h1>

                <!-- Mensagem de desculpa e explicação -->
                <p class="py-6">
                    Me desculpe, mas parece que a página que você está tentando acessar não existe no sistema!
                </p>

                <!-- Botão para voltar à página inicial -->
                <button 
                    class="btn btn-primary"
                    onclick="window.location.href='/PHP-MVC'"
                >
                    Voltar para página principal
                </button>
                </div>
            </div>
        </div>
    </body>
</html>