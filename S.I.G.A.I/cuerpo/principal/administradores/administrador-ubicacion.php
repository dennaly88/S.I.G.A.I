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
    <br>
    <CENTER>
<div class="col-md-6 py-3 text-md-center">
            <a href="#" class="btn btn-outline-primary">UBICACION<span class="mai-arrow-forward ml-2"></span></a>   
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
                <table id="tablaUbicacion" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Estado</th>
                            <th>Codigo</th>
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
<div class="modal fade" id="modalCRUD14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="btn-sm btn-primary  modal-header">
                <h5  id="exampleModalLabel">

                <button type="button" class="btn-sm btn-light" data-dismiss="modal">Ubicacion</button>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUbicacion">    
            <div class="modal-body">
                <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group">
                            <label for="" class="col-form-label">Estado:</label>
                            <input type="text" class="form-control" id="nombre">
                            </div>
                            </div> 
                              
                </div>   
                
                
                <div class="row">
                            <div class="col-lg-12">
                            <div class="form-group">
                            <label for="" class="col-form-label">Siglas</label>
                            <input type="text" class="form-control" id="siglas">
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

  <script src="js/ubicacion.js"></script>  
</html>
