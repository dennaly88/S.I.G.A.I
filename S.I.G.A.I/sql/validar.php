<?php
include 'llave.php'; 
?>


<?php
     

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
$contraseña = hash ('sha512',$contraseña);  


//$contraseña = openssl_decrypt($_POST['pass'],AES,KEY);
// $clave= openssl_decrypt(id, AES,KEY);
//$desincritar= "SELECT * FROM usuarios";
      

      include "conexion.php";
      $consulta="SELECT * FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
      $resultado=mysqli_query($conexion,$consulta);
      $filas=mysqli_num_rows($resultado);
      $data = mysqli_fetch_assoc($resultado);  

 
      if ($filas>0){

        session_start();  
        $_SESSION['usuario']=$data['usuario'];
        $variable=$_SESSION['usuario'];

          header ("location:../cuerpo/principal/index.php");
      }

      else {
       
        header ("location:../index.php?usu=88");

      }
      mysqli_free_result($resultado);
      mysqli_close($conexion);?>