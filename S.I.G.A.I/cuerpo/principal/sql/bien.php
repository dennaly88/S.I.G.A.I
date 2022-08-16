<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$clasificacion = (isset($_POST['clasificacion'])) ? $_POST['clasificacion'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){ 
    case 1:
        $consulta = "INSERT INTO nombre_bien (nombre,clasificacion) VALUES ('$nombre','$clasificacion') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
         
        $consulta = "SELECT * FROM nombre_bien ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:         
        $consulta = "UPDATE nombre_bien SET nombre='$nombre', clasificacion='$clasificacion'  WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $consulta = "SELECT * FROM color WHERE id='$id' ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM nombre_bien WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM nombre_bien ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

