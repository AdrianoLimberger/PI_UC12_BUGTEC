<?php

include_once '../dao/clsConexao.php';
include_once '../dao/clsClienteDAO.php';
include_once '../model/clsCliente.php';

if (isset($_REQUEST['inserir'])) {

    $consulta->setNome($_POST['txtNome']);
    $consulta->setCpf($_POST['txtCpf']);
    $consulta->setTelefone($_POST['txtTelefone']);
    $consulta->setSexo($_POST['rbSexo']);
    $consulta->setSenha($_POST['txtSenha']);

    ClienteDAO::inserir($consulta);

    header("Location: index.php");
}