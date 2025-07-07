<?php

class Usuarios extends Modelo {

    public function listarUsuarios(){
        $stmt = $this->bd->prepare("SELECT * FROM usuarios");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criarUsuarios($informacoes){
        $stmt = $this->bd->prepare(
            "INSERT INTO usuarios (nome, email, password) VALUES (?, ?, ?)"
        );

        $stmt->execute([
            $informacoes['nome'],
            $informacoes['email'],
            $informacoes['senha']
        ]);
    }
}