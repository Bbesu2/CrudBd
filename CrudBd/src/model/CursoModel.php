<?php

class FilmeModel{

    function __construct($nome, $codigo){
        $this->nome  = $nome;
        $this->codigo  = $codigo;
    }

    // Getters
    public function getNome() { return $this->nome; }
    public function getcodigo() { return $this->codigo; }
}