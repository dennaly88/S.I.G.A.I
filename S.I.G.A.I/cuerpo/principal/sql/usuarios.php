<?php
include_once 'conexion.php';
include 'llave.php';
$objeto = new Conexion(); 
$conexion = $objeto->Conectar();


$nombres = (isset($_POST['nombres'])) ? $_POST['nombres'] : '';
$apellidos = (isset($_POST['apellidos'])) ? $_POST['apellidos'] : '';
$telefono = (isset($_POST['telefono'])) ? $_POST['telefono'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$gerencia = (isset($_POST['gerencia'])) ? $_POST['gerencia'] : '';
$perfil = (isset($_POST['perfil'])) ? $_POST['perfil'] : '';
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$contraseña = (isset($_POST['contraseña'])) ? $_POST['contraseña'] : '';



$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';


switch($opcion){
    case 1:
         //$clave = $contraseña;
       //$clave = openssl_encrypt($contraseña,AES,KEY);
        $clave = hash ('sha512',$contraseña);  
        $consulta = "INSERT INTO usuarios (nombres, apellidos, telefono, correo, gerencia, perfil, usuario, contraseña) VALUES('$nombres', '$apellidos', '$telefono', '$correo','$gerencia','$perfil','$usuario', '$clave') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
         
        $consulta = "SELECT * FROM usuarios ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE usuarios SET nombres='$nombres', apellidos='$apellidos', telefono='$telefono', correo='$correo', gerencia='$gerencia' , perfil='$perfil' ,usuario='$usuario', contraseña='$contraseña'  WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $consulta = "SELECT * FROM usuarios WHERE id='$id' ORDER BY id DESC";
        include 'actuallizar-usuario.php';
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM usuarios WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM usuarios ORDER BY id DESC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}


print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;

