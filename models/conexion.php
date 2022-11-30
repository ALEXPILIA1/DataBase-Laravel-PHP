<?php
$nombre_bd ="oficina";
$usuario ="root";
$contraseña ="";

try{

    $bd = new PDO(
        'mysql:host=localhost;
        dbname=' .$nombre_bd,
        $usuario,
        $contraseña
    );
} catch(Exception $e){
    //manejo de excepciones (errores)
    echo "No funciono la conexion porque:  ".$e->getMessage();
}



?>
