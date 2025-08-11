<?php
/**
 * ----------------------------------------------------------------------------
 * Classe UserController (Controlador de Usuários)
 * ----------------------------------------------------------------------------
 *
 * Responsável por gerenciar as ações relacionadas aos usuários, como: criação,
 * listagem, edição, deleção, validações, etc. Herda funcionalidades da classe base Controller.
 */


class UsuariosControlador extends Controlador{

    /**
     * ----------------------------------------------------------------------------
     * Método listar()
     * ----------------------------------------------------------------------------
     *
     * Busca todos os usuários cadastrados no banco de dados e renderiza a view
     * de listagem.
     */
    public function listar(){
        // Instancia o modelo Useruarios e obtém todos os usuários
        $modeloUsuario = new Usuarios();
        // Caso não tenha nenhum usuário cadastrado, o valor é uma lista vazia.
        $usuarios = $modeloUsuario->listarUsuarios() ?? [];

        // Carrega a view de listagem passando os usuários como parâmetro
        $this->render('usuarios/index', ['usuarios' => $usuarios]);
    }

    /**
     * ----------------------------------------------------------------------------
     * Método criar()
     * ----------------------------------------------------------------------------
     *
     * - Salva uma mensagem flash na sessão para feedback ao usuário.
     * - Redireciona para a listagem de usuários após o cadastro.
     */
    public function criar(){
        // Verifica se o formulário foi enviado (Usuário clicou no botão de cadastro)
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Cria uma nova instância do modelo User e salva os dados
            $modeloUsuarios = new Usuarios();
            $modeloUsuarios->criarUsuarios($_POST);

            // Inicia a sessão e define a mensagem flash
            session_start();
            $_SESSION['flash_message'] = "Usuário cadastrado com sucesso!";

            // Redireciona para a listagem de usuários
            header('Location: /PHP-MVC/index.php?controlador=usuarios&acao=listar');
            exit;
        }

        // Exibe o formulário de cadastro se não foi clicado no botão de "cadastrar"
        $this->render('usuarios/criar');
    }

    /**
     * ----------------------------------------------------------------------------
     * Método editar()
     * ----------------------------------------------------------------------------
     *
     * Busca o usuário selecionado e atualiza o registro com as informações novas.
     */
    public function editar(){
      $usuario = new Usuarios();
      $id = $_GET['id'] ?? null;

      if(is_null($id)){
        echo "Usuário não encontrado!";
        return;
      }

      // Verifica se o formulário foi enviado (Usuário clicou no botão de atualizar)
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $usuario->editar($id, $_POST);

        header('Location: /PHP-MVC/index.php?controlador=usuarios&acao=listar');
        exit;
      }

      // Busca o usuário para preencher o formulário
        $usuarioBuscado = $userModel->buscarPorId($id);

        if (!$usuarioBuscado) {
            echo "Usuário não encontrado!";
            return;
        }

      // Renderiza a view passando os dados do usuário
      $this->render('user/editar', ['usuario' => $usuarioBuscado]);
    }
}