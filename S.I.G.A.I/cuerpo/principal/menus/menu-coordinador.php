
<?php
include "conexion.php";

session_start();


?> 


<div class="top-bar">
           <div class="container">
             <div class="row align-items-center">
               <div class="col-md-8">
                 <div class="d-inline-block">
                   <span class="mai-mail fg-primary"></span> <a href="mailto:contact@mail.com">desarrollotic@vtv.gov.ve</a>
                 </div>
                 <div class="d-inline-block ml-2">
                   <span class="mai-call fg-primary"></span> <a href="tel:+0011223495">Extensiones (1815-1642)</a>
                 </div>
               </div>
         <div class="col-md-4 text-right d-none d-md-block">
         <?php
           
           
           
           echo  date("d-m-Y");
           ?>
     


 

         
           <?php
           date_default_timezone_set("America/Caracas");
           $hora = date('h:i a', time() - 3600 * date('I'));
           print "&nbsp;$hora&nbsp;";
           ?> 
           <img src="../../img/favico.ico">
           <center>
         </div>
       </div>
     </div>
   </div>

   <nav class="navbar navbar-expand-lg navbar-light">
     <div class="container">

       <img src="../../img/sigai.png">
       <center><br>

         <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="navbar-collapse collapse" id="navbarContent">
           <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
             <li class="nav-item active">
               <a href="index.php" class="nav-link">  <?php echo $_SESSION['usuario']; ?> </a>
             </li>
            
             <li class="nav-item">
               <a href="bienes.php" class="nav-link">Bienes</a>
             </li>
             <li class="nav-item">
               <a href="reportes.php" class="nav-link">Reportes</a>
             </li>
             <li class="nav-item">
               <a href="modulos.php" class="nav-link">Modulos</a>
             </li>
             <li class="nav-item">
               <a href="movimientos.php" class="nav-link">Movimientos</a>
             </li>
             <li class="nav-item">
               <a href="graficas.php" class="nav-link">Graficas</a>
             </li>
            
             <li class="nav-item">
               <a href="../../../index.php" class="nav-link">Salir</a>
             </li>
             <li class="nav-item active">
               <a href="index.php" class="nav-link">   
               &nbsp;&nbsp; &nbsp;&nbsp;<?php echo $_SESSION['perfil']; ?>
             
               
              
              
              </a>
             </li>
           </ul>
         </div>
     </div>
    </nav>


    