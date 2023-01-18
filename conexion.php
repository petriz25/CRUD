<?php

$host = "localhost";
$user = "root";
$clave = "root";
$baseDatos = "appsalon";

$db = mysqli_connect($host, $user, $clave, $baseDatos);

if(!$db){
    echo("Conexión incorrecta");
}