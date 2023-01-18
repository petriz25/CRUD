<?php

require 'conexion.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$insertar = "INSERT INTO servicios(nombre, precio) VALUES('$nombre', '$precio')";

$query = mysqli_query($db, $insertar);

if($query){

    echo "<script> alert('Guardado exitosamente');
    location.href = 'funciones.php';
    </script>";
}else{
    echo "<script> alert('Error al guardar');
    location.href = 'funciones.php';
    </script>";
}