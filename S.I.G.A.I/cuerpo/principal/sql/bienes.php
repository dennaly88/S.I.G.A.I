<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();


$codigo = (isset($_POST['codigo'])) ? $_POST['codigo'] : '';
$tipo = (isset($_POST['tipo'])) ? $_POST['tipo'] : '';
$nombre_tipo = (isset($_POST['nombre_tipo'])) ? $_POST['nombre_tipo'] : '';
$marca = (isset($_POST['marca'])) ? $_POST['marca'] : '';
$modelo = (isset($_POST['modelo'])) ? $_POST['modelo'] : '';
$color = (isset($_POST['color'])) ? $_POST['color'] : '';
$condicion = (isset($_POST['condicion'])) ? $_POST['condicion'] : '';
$seri = (isset($_POST['seri'])) ? $_POST['seri'] : '';
$fecha_registro = (isset($_POST['fecha_registro'])) ? $_POST['fecha_registro'] : '';
$fecha_compra = (isset($_POST['fecha_compra'])) ? $_POST['fecha_compra'] : '';
$costo = (isset($_POST['costo'])) ? $_POST['costo'] : '';
$ubicacion = (isset($_POST['ubicacion'])) ? $_POST['ubicacion'] : '';
$financiamiento = (isset($_POST['financiamiento'])) ? $_POST['financiamiento'] : '';



$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO bienes (codigo, tipo, nombre_tipo, marca, modelo, color, condicion, seri, fecha_registro, fecha_compra, costo, ubicacion, financiamiento) VALUES('$codigo','$tipo','$nombre_tipo','$marca','$modelo','$color','$condicion','$seri','$fecha_registro','$fecha_compra','$costo','$ubicacion','$financiamiento') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM bienes ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE bienes SET codigo='$codigo', tipo='$tipo', nombre_tipo='$nombre_tipo', marca='$marca',modelo='$modelo',color='$color',condicion='$condicion',seri='$seri', fecha_registro='$fecha_registro',fecha_compra='$fecha_compra',costo='$costo',ubicacion='$ubicacion',financiamiento='$financiamiento' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM bienes WHERE id='$id' ORDER BY id DESC";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM bienes WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM bienes ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;