<?php
    function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $base = "heroes";
        $conexion = mysqli_connect($servidor,
                                    $usuario,
                                    $password,
                                    $base);
        $conexion->set_charset('utf8mb4');
        return $conexion;
    }
?>