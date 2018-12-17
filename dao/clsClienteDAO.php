<?php

class ClienteDAO {
    
    public static function inserir($cliente) {
        
        $sql = "INSERT INTO clientes (nome, cpf, telefone, sexo, senha) VALUES"
                . "("
                . " '" . $cliente->getNome() . "' , "
                . " '" . $cliente->getCpf() . "' , "
                . " '" . $cliente->getTelefone() . "' , "
                . " '" . $cliente->getSexo() . "' , "
                . " '" . $cliente->getSenha() . "' "
                . ");";
        
        Conexao::executar($sql);
        
    }
    
}
