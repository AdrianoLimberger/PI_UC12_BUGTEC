<?php

require_once 'menu.php';

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar Cliente</title>
    </head>
    <body>
        
        <h1 align="center">Cadastrar cliente</h1><br><br><br><br>
        
        <form action="controller/salvarCliente.php?inserir" method="POST">
        
        <label>Nome:</label>
            <input type="text" name="txtNome" placeholder="Nome"><br><br>
            
            <label>CPF:</label>
            <input type="text" name="txtCpf" placeholder="CPF"><br><br>
            
            <label>Telefone:</label>
            <input type="text" name="txtTelefone" placeholder="Telefone"><br><br>
            
            <label>Sexo:</label>
            <input type="radio" name="rbSexo" value="m">Masculino
            <input type="radio" name="rbSexo" value="f">Feminino<br><br>
            
            <label>Senha:</label>
            <input type="password" name="txtSenha" placeholder="Senha"><br><br>
            
            <label>Confirmar senha:</label>
            <input type="password" name="txtConfirmarSenha" placeholder="Confirmar senha"><br><br><br>
            
            <input type="submit" value="Cadastrar">
            
            </form>
        
    </body>
</html>
