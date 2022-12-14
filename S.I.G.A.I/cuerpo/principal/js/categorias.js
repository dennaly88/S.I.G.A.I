$(document).ready(function() {
    var id, opcion;
    opcion = 4;
        
    tablaUsuarios = $('#tablaCategoria').DataTable({  
        "ajax":{            
            "url": "sql/categorias.php", 
            "method": 'POST',         
            "data":{opcion:opcion},   
            "dataSrc":""
        },
        "columns":[
            {"data": "id"},
            {"data": "nombre"},
            {"data": "clasificacion"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn-sm btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i> </button>&nbsp;&nbsp;<button class='btn-sm btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });     
      
    var fila; 
    
    $('#formCategoria').submit(function(e){                         
        e.preventDefault(); 
        nombre = $.trim($('#nombre').val());  
        clasificacion = $.trim($('#clasificacion').val());  
         
            
          
            $.ajax({
              url: "sql/categorias.php",
              type: "POST",
              datatype:"json",    
              data:  {id:id, nombre:nombre,  clasificacion:clasificacion, opcion:opcion},    
              success: function(data) {
                tablaUsuarios.ajax.reload(null, false);
                var respuesta =  alert("Categorias Actualizadas");
               }
            });			        
        $('#modalCRUD4').modal('hide');											     			
    });
    $("#btnNuevo").click(function(){
        opcion = 1;           
        id=null;
        $("#formCategoria").trigger("reset");
        $(".modal-header").css( "background-color", "#");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Alta de Usuario");
        $('#modalCRUD4').modal('show');   
    });        
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;
        fila = $(this).closest("tr");	        
        id = parseInt(fila.find('td:eq(0)').text()); 		            
        nombre = fila.find('td:eq(1)').text();
        clasificacion = fila.find('td:eq(2)').text();
        $("#nombre").val(nombre);
        $("#clasificacion").val(clasificacion);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Usuario");		
        $('#modalCRUD4').modal('show');	
        var respuesta =  alert("Quieres Editar la Categoria");  	   
    });
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3;   
             
        var respuesta = confirm("??Est?? seguro de borrar la Categoria "+id+"?");    
        if (respuesta) {            
            $.ajax({
              url: "sql/categorias.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},    
              success: function() {
                  tablaUsuarios.row(fila.parents('tr')).remove().draw();   
                  var respuesta =  alert("Se Elimino la Categoria  de Forma Correcta");         
               }
                
            });	
        }
     });
       
    });    