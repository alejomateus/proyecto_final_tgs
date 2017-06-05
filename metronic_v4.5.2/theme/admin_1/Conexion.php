<?php
class Conexion{
    public function conectar(){
    $usuario='dataplus';
    $clave='datapl';
    $host='localhost';
    $db='datapl';
    return $conexion= new PDO("mysql:host=$host;dbname=$db", $usuario, $clave);
    }
}