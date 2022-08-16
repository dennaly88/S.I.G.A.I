<!doctype html>
<html lang="es">
  <!--------------------------------------------------------------------- LIBRERIAS  ---------------------------------------------------------------------------->
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="fonts/icomoon/style.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favico.ico">
        <title>S.I.G.A.I</title>
  </head>
  <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
  <body>
           <div class="d-lg-flex half">
           <div class="bg order-1 order-md-2" style="background-image: url('img/8.jpg');"></div>
           <div class="contents order-2 order-md-1">
           <div class="container">
           <div class="row align-items-center justify-content-center">
           <div class="col-md-7">
           <img src="img/sigai8.png "><center><br>
  <!------------------------------------------------------------- VERIFICACION DE USUARIO ---------------------------------------------------------------------------->
  <script type="text/javascript">
window.history.replaceState({},'','S.I.G.A.I.com');
</script>
                  
<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
   <div class="card text-center">
  <div class="card-body" >

  <!------------------------------------------------------------------------------- LOGIN ---------------------------------------------------------------------------->
  <?php
                       unset($usu);
                       $usu8 = $_GET["usu"];
                       if ($usu8 < 8) {
                           } else 
                           {
                             include 'error-usuario.php';
                          
	                           
                            }  
  ?>
  <form   action="sql/validar.php" method="POST">

  
  
                    <div class="form-group first">
                    <input type="text" class="form-control" placeholder="Usuario"  name="usuario" required></div>
                    <div class="form-group last mb-3">
                    <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required></div>
                    <div class="d-flex mb-5 align-items-center">
                    <span class="ml-auto"><a href="http://192.168.6.25/index.php" class="forgot-pass">Regresar</a></span></div>
                    <input type="submit" value="Entrar" class="btn btn-block btn-primary active">
  </form>  
  <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
 
  </div>
  <div class="card-footer text-muted">
    <!--------------------------------------------------------------  FECHA Y HORA EN PHP ---------------------------------------------------------------------------->
  <?php 
       echo  date("d-m-Y");
   ?>
<?php 
      date_default_timezone_set("America/Caracas");
      $hora = date('h:i a',time() - 3600*date('I'));
      print "&nbsp;$hora&nbsp;"; 
?>
<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
   </div>
   </div>
   <h6><p class="mt-5 mb-3 text-muted">© Venezolana de Television Todos los Derechos Reservados</p></h6>
   <img src="img/logo.png"><center><br>
   </div>
   </div>
   </div>
  </div>    
  </div>

 
<!----------------------------------------------------------------------------- LIBRERIAS ---------------------------------------------------------------------------->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->

  </body>


  
</html>