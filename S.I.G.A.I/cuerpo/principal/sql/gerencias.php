<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$ubicacion = (isset($_POST['ubicacion'])) ? $_POST['ubicacion'] : '';
$siglas = (isset($_POST['siglas'])) ? $_POST['siglas'] : '';


 

$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO gerencias (nombre, ubicacion, siglas) VALUES('$nombre', '$ubicacion', '$siglas' ) ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
         
        $consulta = "SELECT * FROM gerencias ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE gerencias SET nombre='$nombre', ubicacion='$ubicacion', siglas='$siglas'  WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $consulta = "SELECT * FROM gerencias WHERE id='$id' ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM gerencias WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM gerencias ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

