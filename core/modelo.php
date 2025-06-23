<?php

class Modelo {

    protected $bd;

    public function __construct(){

        $this->bd = BancoDeDados::obtemConexao();
    }
}