<?php

class UsuariosControlador extends Controlador{

    public function listar(){
        $modeloUsuario = new Usuarios(); 
        $usuarios = $modeloUsuario->listarUsuarios() ?? [];

        $this->render('usuarios/index', ['usuarios' => $usuarios]);
    }

    public function criar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $modeloUsuarios = new Usuarios();
            $modeloUsuarios->criarUsuario($_POST);

            session_start();
            $_SESSION['flash_message'] = "Usuário cadastrado com sucesso!";

            header('Location: /PHP-MVC/index.php?controlador=usuarios&acao=listar');
            exit;
        }

        $this->render('usuarios/criar');
    }
}