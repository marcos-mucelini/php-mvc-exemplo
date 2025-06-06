<?php

class BancoDeDados {
    
    private static $instancia = null;

    public static function obtemConexao(){

        if (self::$instancia === null) {
           self::$instancia = new PDO('mysql:host=localhost;dbname=mvc_php', 'root', ''); 
        
            self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instancia;
    }
}