<?php
/**
 * ----------------------------------------------------------------------------
 * Classe Base Controller
 * ----------------------------------------------------------------------------
 *
 * Esta classe é a base de todos os controladores do sistema.
 * Ela define métodos comuns, como o método "render" que renderiza as views
 * (páginas) dentro do layout principal.
 *
 * Por que usamos:
 * - Para não repetir código de renderização em cada controlador.
 * - Para garantir consistência e facilidade de manutenção.
 * - Para facilitar a passagem de dados (parâmetros) para as views.
 */

class Controlador{

     /**
     * ----------------------------------------------------------------------------
     * Método para renderizar uma view dentro do layout principal
     * ----------------------------------------------------------------------------
     *
     * @param string $view   O caminho de pastas e(ou) arquivos da view (por exemplo: 'user/index')
     * @param array  $params Variáveis que a view pode usar
     *
     * Como funciona:
     * - Extrai as variáveis do array $params para serem usadas diretamente na view.
     * - Usa "output buffering" (ob_start/ob_get_clean) para capturar o conteúdo da view.
     * - Insere o conteúdo renderizado na variável $content e inclui o layout.
     *
     * Observação:
     *  - O caminho de pastas e(ou) arquivos deve corresponder a estrutura do projeto,
     *    neste sentido, todos as telas vão estar dentro da pasta 'visao/...'
     */
    protected function render($visao, $parametros = []){
        // Extrai as variáveis para uso direto na view
        extract($parametros);

        // Inicia o buffer de saída
        ob_start();

        // Inclui a view solicitada
        require __DIR__.'/../app/visao/'.$visao.'.php';

        // Obtém o conteúdo da view
        $conteudo = ob_get_clean();

        // Inclui o layout principal e injeta o conteúdo
        require __DIR__.'/../public/layout.php';
    }
}