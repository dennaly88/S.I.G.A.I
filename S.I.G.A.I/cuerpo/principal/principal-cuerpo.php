<?php 
session_start();

$variable=$_SESSION['usuario'];



include('conexion.php');

		$sql="SELECT perfil from usuarios where '$variable'=usuario;";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		 ?>
	
			<?php   
            $tu=$mostrar['perfil']; 

            session_start();  
 
                         
            $_SESSION['perfil']=$tu;
            


            if ($tu == 'administrador') {

              require("cuerpos/cuerpo-administrador.php");
               
          } else
          if ($tu == 'coordinador') {
          
          
          
              require("cuerpos/cuerpo-coordinador.php");
          } else
          if ($tu == 'basico'){


            require("cuerpos/cuerpo-basico.php");

          }






           
            ?>	
	<?php 
	}
	 ?> 