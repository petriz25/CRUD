<?php

require 'conexion.php';

$id = $_POST['id'];

$eliminar ="DELETE FROM servicios WHERE id=$id";

$query = mysqli_query($db, $eliminar);

if($query){

    echo "<script> alert('Eliminado exitosamente');
    location.href = 'funciones.php';
    </script>";
}else{
    echo "<script> alert('Error al eliminar');
    location.href = 'funciones.php';
    </script>";
}