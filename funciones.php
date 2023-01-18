<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de datos por medio de PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenedor">
    <h1>LISTADO DE SERVICIOS</h1>
    <form method="POST" action="guardar.php">
    <FIELdset>
        <H3>AGREGAR SERVICIO</H2>
        <label for="">Nombre del servicio: </label>
        <input name="nombre" type="text">
        <label for="">Precio: </label>
        <input name="precio" type="text">
        <button type="submit">Agregar</button>
    </FIELdset>
    </form>

    <form method="POST" action="eliminar.php">
        <fieldset>
        <H3>ELIMINAR SERVICIO</H2>
        <label for="">ID</label>
        <input name="id" type="text">
        <button type="submit">Eliminar</button>
        </fieldset>
    </form>

    <form method="POST" action="actualizar.php">
        <fieldset>
        <H3>ACTUALIZAR SERVICIO</H2>
        <label for="">ID</label>
        <input name="id" type="text">
        <label for="">Nombre</label>
        <input name="nombre" type="text">
        <label for="">precio</label>
        <input name="precio" type="text">  
         
        <button type="submit">Actualizar</button>
        </fieldset>
    </form>

    </div>
    
    <li class="lista">
        <p>ID</p>
        <p>NOMBRE</p>
        <p>PRECIO</p>
    </li>

<?php

function obtenerServicios(){
    try{

        //Importar la conexión 
        require 'conexion.php';


        //Escribir el codigo SQL 
        $sql = "SELECT * FROM servicios";

        $consulta = mysqli_query($db, $sql);

        //Arreglo vacio
        $servicios =[];

        $i=0;


        //Obtener los resultados
        while($row = mysqli_fetch_assoc($consulta)){

            ?>
            <li>
                <p><?php echo $row['id'] ?></p>
                <p><?php echo $row['nombre'] ?></p>
                <p><?php echo $row['precio'] ?></p>
            </li>


            <?php


            $i++;
        }


        


    }catch(\Throwable $th){

        var_dump($th);
    }
}

obtenerServicios();
?>
    
</body>
</html>