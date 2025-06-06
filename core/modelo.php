<?php

class Modelo {

    protected $bd;

    public function __contruct(){

        $this->bd = BancoDeDados::obtemConexao();
    }
}