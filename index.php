<?php

require_once __DIR__.'/core/database.php';
require_once __DIR__.'/core/controlador.php';
require_once __DIR__.'/core/modelo.php';

require_once __DIR__.'/app/controlador/UsuariosControlador.php';
require_once __DIR__.'/app/modelo/Usuarios.php';

$controlador = $_GET['controlador'] ?? 'usuarios';
$acao = $_GET['acao'] ?? 'listar';

$controlador = ucfirst($controlador).'Controlador';

if (class_exists($controlador) && method_exists($controlador, $acao)) {
    $ctrl = new $controlador();
    $ctrl->$acao();
} else {
    require __DIR__.'/public/404.php';
}