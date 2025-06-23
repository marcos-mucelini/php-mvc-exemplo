<?php

class Usuarios extends Modelo {

    public function listarUsuarios(){
        $stmt = $this->bd->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}