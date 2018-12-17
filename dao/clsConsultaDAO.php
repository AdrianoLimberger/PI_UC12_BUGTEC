<?php

include_once 'clsConexao.php';

class ConsultaDAO {
    
    public static function inserir($consulta) {
        
        $sql = "INSERT INTO consultas (tipo, horario, medico) VALUES"
                . "("
                . " '" . $consulta->getTipo() . "' , "
                . " '" . $consulta->getHorario() . "' , "
                . " '" . $consulta->getMedico() . "' "
                . ");";
        
        Conexao::executar($sql);
        
    }
    
}
