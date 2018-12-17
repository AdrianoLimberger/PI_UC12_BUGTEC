<?php

include_once '../model/clsConsulta.php';
include_once '../dao/clsConexao.php';
include_once '../dao/clsConsultaDAO.php';

if (isset($_REQUEST['inserir'])) {
    
    $consulta = new Consulta();
    $consulta->setTipo($_POST['selectTipoConsulta']);
    $consulta->setHorario($_POST['selectHorarioConsulta']);
    $consulta->setMedico($_POST['selectMedicoConsulta']);
            
    ConsultaDAO::inserir($consulta);
    
    header("Location: index.php");
    
}
