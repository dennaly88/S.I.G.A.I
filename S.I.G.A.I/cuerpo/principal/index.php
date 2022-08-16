<!DOCTYPE html>
<html lang="es">



  <!-- Creado por DANNY JIMENEZ -->
<head>
            <title>S.I.G.A.I</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="copyright" content="MACode ID, https://macodeid.com/">  
            <link rel="shortcut icon" href="../../img/favico.ico">
</head>
  <!-- Creado por DANNY JIMENEZ -->

 
<body>
<script type="text/javascript">
window.history.replaceState({},'','S.I.G.A.I.com');
</script>


<script type="text/javascript">
var t;
window.onload=resetTimer;
document.onkeypress=resetTimer;
document.onmousemove
function logout()
{
  var opcion = confirm("El sistema se cierra por Inactividad.");
  if (opcion == true) {
    location.href='../../../index.php';
	} else {
    location.href='http://192.168.6.25/S.I.G.A.I/cuerpo/principal/index.php';
	}
}
function resetTimer()
{
clearTimeout(t);
t=setTimeout(logout,180000)
}
</script>







      <?php include 'librerias.php'?>
  <header>
      <?php include 'principal-menu.php';?>
      

 </header>
  <main oncontextmenu=»return false» onkeydown=»return false»>
  
        <?php include 'cuerpo-superior.php'?>
        <?php include 'principal-cuerpo.php'?> 
        <?php include 'header-inicio.php'?>
        <?php include 'cuerpo-medio.php'?>  
        <?php include 'header-final.php'?><BR>
        <?php include 'portafolio.php'?> 
        <?php include 'header-footer.php'?><BR>
        <?php include 'cuerpo-equipo.php'?> 
     <br><br>
 
  </main> 
  
  <footer class="page-footer">
    <?php include 'footer.php'?>
  </footer>
</body>
  <!-- Creado por DANNY JIMENEZ -->
</html>