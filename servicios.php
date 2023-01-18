<?php

require 'funciones.php';

$servicios = obtenerServicios();

var_dump(json_encode($servicios));