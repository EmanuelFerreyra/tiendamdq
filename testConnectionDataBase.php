<?php

include 'vendor/autoload.php';

use tiendamdq\database\Connection;
use tiendamdq\database\ConfigDataBase;


/** Inicializamos configuracion */

$config = new ConfigDataBase();

/** Inicializamos conexion a base de datos ( pasamos las claves a la conexion ) */
$connection = new Connection(  $config->keysDataBase() );

print $connection->on();


