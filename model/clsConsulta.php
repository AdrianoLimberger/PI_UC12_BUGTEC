<?php

class Consulta {
    
    private $tipo, $horario, $medico, $cliente;
    
    function __construct($tipo = null, $horario = null, $medico = null, $cliente = null) {
        $this->tipo = $tipo;
        $this->horario = $horario;
        $this->medico = $medico;
        $this->cliente = $cliente;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getHorario() {
        return $this->horario;
    }

    function getMedico() {
        return $this->medico;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setHorario($horario) {
        $this->horario = $horario;
    }

    function setMedico($medico) {
        $this->medico = $medico;
    }
    
    function getCliente() {
        return $this->cliente;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

}
