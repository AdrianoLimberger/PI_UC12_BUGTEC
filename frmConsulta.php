<?php

require_once 'menu.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Marcar consulta</title>
    </head>
    <body>
        
        <h1 align="center">Marcar consulta</h1><br><br><br><br> 
        
        <form action="controller/salvarConsulta.php?inserir" method="POST">
            
            <label>Tipo de consulta:</label>
            <select name="selectTipoConsulta">
                <option>Selecione...</option>
            </select><br><br>
            
            <label>Horário:</label>
            <select name="selectHorarioConsulta">
                <option>Selecione...</option>
                <option value="08h - 8:50h">08h - 8:50h</option>
                <option value="08:50h - 9:40h">08:50h - 9:40h</option>
                <option value="09:40h - 10:30h">09:40h - 10:30h</option>
                <option value="10:30h - 11:20h">10:30h - 11:20h</option>
                <option value="11:20h - 12:10h">11:20h - 12:10h</option>
                <option value="12:10h - 13:00h">12:10h - 13:00h</option>
                <option value="13:00h - 13:50h">13:00h - 13:50h</option>
                <option value="13:50h - 14:40h">13:50h - 14:40h</option>
                <option value="14:40h - 15:30h">14:40h - 15:30h</option>
                <option value="15:30h - 16:20h">15:30h - 16:20h</option>
                <option value="16:20h - 17:10h">16:20h - 17:10h</option>
                <option value="17:10h - 18:00h">17:10h - 18:00h</option>
                <option value="18:00h - 18:50h">18:00h - 18:50h</option>
                <option value="18:50h - 19:40h">18:50h - 19:40h</option>
                <option value="19:40h - 20:30h">19:40h - 20:30h</option>
                <option value="20:30h - 21:20h">20:30h - 21:20h</option>
                <option value="21:20h - 22:10h">21:20h - 22:10h</option>
            </select><br><br>
            
            <label>Médico:</label>
            <select name="selectMedicoConsulta">
                <option>Selecione...</option>
                <option value="Jorge">Jorge</option>
                <option value="Geraldo">Geraldo</option>
                <option value="Vitor">Vitor</option>
                <option value="Adalberto">Adalberto</option>
            </select><br><br>
            
            <input type="submit" value="Marcar consulta">
        </form>
        
    </body>
</html>
