<?php

class UsuariosControlador extends Controlador{

    public function listar(){
        $modeloUsuario = new Usuarios(); 
        $usuarios = $modeloUsuario->listarUsuarios() ?? [];

        $this->render('usuarios/index', ['usuarios' => $usuarios]);
    }
}