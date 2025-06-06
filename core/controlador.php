<?php

class Controlador{
    protected function render($visao, $parametros = []){
        extract($parametros);

        ob_start();

        require __DIR__.'/../app/visao/'.$visao.'.php';

        $conteudo = ob_get_clean();

        require __DIR__.'/../public/layout.php';
    }
}