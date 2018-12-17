<?php

class Conexao {

    private static function abrir() {

        $nome = "m171_clinica";
        $local = "senacinfo-db";
        $usuario = "inf_m171";
        $senha = "senacrs";

        $conn = mysqli_connect($local, $usuario, $senha, $nome);

        if ($conn)
            return $conn;
        else
            return null;
    }

    private static function fechar($conn) {
        mysqli_close($conn);
    }

    public static function executar($sql) {

        $conn = self::abrir();

        if ($conn) {
            mysqli_query($conn, $sql);
            self::fechar($conn);
        }
    }

    public static function consultar($sql) {

        $conn = self::abrir();

        if ($conn) {

            $result = mysqli_query($conn, $sql);
            self::fechar($conn);
            return $result;
        } else {

            return null;
        }
    }

}