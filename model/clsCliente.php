<?php

class Cliente {
    
    private $nome, $cpf, $telefone, $sexo, $senha;
    
    function __construct($nome = null, $cpf = null, $telefone = null, $sexo = null, $senha = null) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->sexo = $sexo;
        $this->senha = $senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getSenha() {
        return $this->senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}
