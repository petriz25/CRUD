<?php

require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$actualizar ="UPDATE servicios SET nombre='$nombre', precio='$precio' WHERE id='$id'";

$query = mysqli_query($db, $actualizar);

if($query){

    echo "<script> alert('Actualizado exitosamente');
    location.href = 'funciones.php';
    </script>";
}else{
    echo "<script> alert('Error al Actualizar');
    location.href = 'funciones.php';
    </script>";
}