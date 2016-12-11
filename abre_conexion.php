<?php

$hotsdb = "localhost";    
$basededatos = "usersdb";    

$usuariodb = "usuario";    
$clavedb = "123456"; 

$tabla_db1 = "usuarios"; 


$conexion_db = new mysqli("$hotsdb","$usuariodb","$clavedb", "$basededatos")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
/*
$conexion_db = mysqli_select_db("$basededatos", $conexion_db)
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");
// cambio de prueba de Jose Daniel
 */
?>
 
