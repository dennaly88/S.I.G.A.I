
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
    <br>
    <CENTER>
<div class="col-md-6 py-3 text-md-center">
            <a href="#" class="btn btn-outline-primary">BIENES NACIONALES<span class="mai-arrow-forward ml-2"></span></a>   
    <br> <br>
  </div>
    <div class="container caja"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
          <br> <center> <button id="btnNuevo" type="button" class="btn-sm btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>    
        </div>    
    </div>  
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaBienes" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Codigo</th>
                            <th>Categoria</th>                                
                            <th>Nombre</th>  
                            <th>Marca</th>
                            <th>Modelo</th>   
                            <th>Color</th> 
                            <th>Condición</th>
                            <th>Serial</th>
                            <th>Registro</th>
                            <th>Compra</th>
                            <th>Costo</th>
                            <th>Ubicacion</th>
                            <th>Financiamiento</th>
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


<div class="modal fade" id="modalCRUD2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="btn-sm btn-primary  modal-header">
                <h5  id="exampleModalLabel">
                <button type="button" class="btn-sm btn-light" data-dismiss="modal">Bienes</button>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formBienes">    
            <div class="modal-body">
                <div class="row">
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Codigo:</label>
                            <input type="text" class="form-control" id="codigo">
                            </div>
                            </div> 
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Categoria</label>
                            <?php
                                $sql="SELECT * from categoria";
                                $result=mysqli_query($conexion,$sql);

                              ?>
                               <select class="form-control " placeholder id="tipo"  required>
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
                <div class="row"> 
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label for="" class="col-form-label">Nombre</label>
                            <?php
                                $sql="SELECT * from nombre_bien";
                                $result=mysqli_query($conexion,$sql);
                              ?>
                              <select class="form-control " placeholder id="nombre_tipo"  required>
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
                            <label for="" class="col-form-label">Marca</label>
                            <?php
                                $sql="SELECT * from marcas";
                                $result=mysqli_query($conexion,$sql);
                              ?>
                                 <select class="form-control " placeholder id="marca"  required>
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
                <div class="row"> 
                                <div class="col-lg-6">
                                <div class="form-group">
                                <label for="" class="col-form-label">Modelo</label>
                                <input type="text" class="form-control" id="modelo">
                                </div>               
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                <label for="" class="col-form-label">Color</label>
                                <?php
                                $sql="SELECT * from color";
                                $result=mysqli_query($conexion,$sql);
                                  ?>
                              <select class="form-control " placeholder id="color"  required>
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
                <div class="row"> 
                                <div class="col-lg-8">
                                <div class="form-group">
                                <label for="" class="col-form-label">Condicion</label>

                                <?php
                                $sql="SELECT * from statu";
                                $result=mysqli_query($conexion,$sql);
                                  ?>
                                <select class="form-control " placeholder id="condicion"  required>
                                <option selected>Seleccione</option>
                                <?php
                                while($mostrar=mysqli_fetch_array($result)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
                                </select>
                                </div>               
                                </div>
                                <div class="col-lg-4">
                                <div class="form-group">
                                <label for="" class="col-form-label">Serial</label>
                                <input type="text" class="form-control" id="seri">
                                </div>
                                </div>  
                </div>
                <div class="row"> 
                                <div class="col-lg-6">
                                <div class="form-group">
                                <label for="" class="col-form-label">Fecha de Registro</label>
                                <input type="date" class="form-control" id="fecha_registro">
                                </div>               
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                <label for="" class="col-form-label">Fecha de Compra</label>
                                <input type="date" class="form-control" id="fecha_compra">
                                </div>
                                </div>  
                </div>
                <div class="row"> 
                                <div class="col-lg-6">
                                <div class="form-group">
                                <label for="" class="col-form-label">Costo</label>
                                <input type="number" class="form-control"  id="costo">
                                </div>               
                                </div>
                                <div class="col-lg-6">
                                <div class="form-group">
                                <label for="" class="col-form-label">Ubicacion</label>

                                <?php
                                $sql="SELECT * from ubicacion";
                                $result=mysqli_query($conexion,$sql);
                                  ?>

                                <select class="form-control " placeholder id="ubicacion"  required>
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
                <div class="row"> 
                                <div class="col-lg-12">
                                <div class="form-group">
                              <center>  <label for="" class="col-form-label">Fuente de Financiamiento</label>
                              <?php
                                $sql="SELECT * from financiamiento";
                                $result=mysqli_query($conexion,$sql);
                                  ?>

                                <select class="form-control " placeholder id="financiamiento"  required>
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
                <button type="submit" id="btnGuardar" class="btn-sm btn-primary">Enviar</button>
            </div>
        </form>    
        </div>
    </div>
</div>   
<script src="js/bienes.js"></script>  
  </body>
</html>
