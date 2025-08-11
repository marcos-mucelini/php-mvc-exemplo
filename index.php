<?php
/**
 * Arquivo de inicialização principal do projeto.
 * Responsável por carregar as classes e executar a ação apropriada
 * de acordo com os parâmetros enviados pela URL.
 *
 * Obs.: Os parametros que o sistema utiliza são:
 *  - controlador - Determina qual controle executar
 *  - acao        - Determina a ação que o controle deve executar
 */

// Carrega as classes principais e específicas do sistema.
require_once __DIR__.'/core/database.php';                        // Classe para conexão com o banco de dados
require_once __DIR__.'/core/controlador.php';                     // Classe base dos controladores
require_once __DIR__.'/core/modelo.php';                          // Classe base dos modelos

require_once __DIR__.'/app/controlador/UsuariosControlador.php';  // Controlador de usuários
require_once __DIR__.'/app/modelo/Usuarios.php';                  // Modelo de usuários

/**
 * Pega o controlador e a ação da URL (GET).
 * Se não forem definidos, assume o controlador "user" e a ação "index".
 */
$controlador = $_GET['controlador'] ?? 'usuarios';
$acao = $_GET['acao'] ?? 'listar';

/**
 * Constrói o nome da classe do controlador dinamicamente
 * Ex.: Se controller=user, vira UserController.
 *
 * Obs.: Com base neste nome, será procurado o controle correspondente,
 *       ou seja, determinará qual tela e ações o usuários poderá executar 
 *       naquele momento.
 */
$controlador = ucfirst($controlador).'Controlador';

/**
 * Verifica se a classe do controlador existe e se o método (ação) existe.
 * Se sim, cria uma instância do controlador e chama a ação.
 * Caso contrário, exibe uma mensagem de erro.
 */
if (class_exists($controlador) && method_exists($controlador, $acao)) {
    $ctrl = new $controlador(); // Cria a instância do controlador
    $ctrl->$acao();             // Executa o método (ação) solicitado
} else {

    // Se o controlador ou a ação não existirem, mostra a página de erro personalizada.
    require __DIR__.'/public/404.php';
}