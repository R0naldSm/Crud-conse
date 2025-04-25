<?php

class Database
{
    public static function connect()
    {
        $host = 'localhost';
        $user = 'root';         // Cambiar si usás otro usuario
        $pass = '';             // Cambiar si tenés contraseña
        $db   = 'concesionaria'; // Asegurate que exista la BD

        $conexion = new mysqli($host, $user, $pass, $db);

        if ($conexion->connect_error) {
            die('Error en la conexión: ' . $conexion->connect_error);
        }

        $conexion->set_charset("utf8"); // Soporte para caracteres especiales

        return $conexion;
    }
}
