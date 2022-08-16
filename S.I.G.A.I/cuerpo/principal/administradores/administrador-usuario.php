<!--------------------------------------------------------------- VERIFICACION DE USUARIO ---------------------------------------------------------------------------->
<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->
<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------> 
<!doctype html>
<html lang="es">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" href="#" />  
        <title>S.I.G.A.I</title>          
  </head>
  <?php require ('libreria-data.php'); ?>
  <body> 
     <header>
     <h3 class='text-center'></h3>
     </header>    
    
<CENTER>
<div class="col-md-6 py-3 text-md-center">
            <a href="#" class="btn btn-outline-primary">USUARIOS <span class="mai-arrow-forward ml-2"></span></a>   
    <br> <br>
  </div>


    <div class="container caja"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">     
                
<!-----------------------------------------------------------INSERTAR BOTON----------------------------------------------------------------------->  
    <br> <center> <button id="btnNuevo" type="button" class="btn-sm btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>    
<!-----------------------------------------------------------INSERTAR BOTON----------------------------------------------------------------------->         
</div>    
        </div>    
    </div>  
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>                                
                            <th>Telefono</th>  
                            <th>Correo</th>
                             <th>Usuario</th>   
                            <th>Contraseña</th> 
                            <th>Perfil</th>
                            <th>Gerencia</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody> 
                                          
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>   
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="btn-sm btn-primary  modal-header">
                <h5  id="exampleModalLabel">

                <button type="button" class="btn-sm btn-light" data-dismiss="modal">Usuarios</button>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">    
            <div class="modal-body">
                <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Nombres:</label>
                            <input type="text" class="form-control" id="nombres">
                            </div>
                            </div> 
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos">
                            </div> 
                            </div>    
                </div>
                <div class="row"> 
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Telefonos</label>
                            <input type="text" class="form-control" id="telefono">
                            </div>               
                            </div>
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Correo</label>
                            <input type="text" class="form-control" id="correo">
                            </div>
                            </div>  
                </div>
                <div class="row"> 
                           <div class="col-lg-6">
                           <div class="form-group">
                           <label for="" class="col-form-label">Usuario</label>
                           <input type="text" class="form-control" id="usuario">
                           </div>               
                </div>
                           <div class="col-lg-6">
                           <div class="form-group">
                           <label for="" class="col-form-label">Contraseña</label>
                           <input type="text" class="form-control" id="contraseña">
                           </div>
                           </div>  
                </div>
                <div class="row">
                           <div class="col-lg-6">    
                           <div class="form-group">
                           <label for="" class="col-form-label">Perfil</label>
                           <?php
                                $sql="SELECT * from perfil";
                                $result=mysqli_query($conexion,$sql);
                            ?>
                           <select type="text" class="form-control" id="perfil"  required>
                           <option selected>Seleccione</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($result)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
                                </select>

                </div>            
                </div>    
                <div class="col-lg-6">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Gerencia</label>
                        <?php
                                $sql="SELECT * from gerencias";
                                $result=mysqli_query($conexion,$sql);

                          ?>
                                <select class="form-control " placeholder id="gerencia"  required>
                                <option selected>Seleccione</option>
                                <?php
                                while($mostrar=mysqli_fetch_array($result)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
                                </select>

                        </div>            
                    </div>   
                    </div>                  
              </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn-sm btn-primary">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>     
  </body>

  <script src="js/usuario.js"></script> 
</html>
