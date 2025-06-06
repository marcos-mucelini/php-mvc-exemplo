<?php

class UsuarioControlador extends Controlador{

    public function listar(){
        $modeloUsuario = new Usuarios(); 
        $usuarios = $modeloUsuario->listarUsuarios() ?? [];

        $this->render('usuarios/index', ['usuarios' => $usuarios]);
    }
}