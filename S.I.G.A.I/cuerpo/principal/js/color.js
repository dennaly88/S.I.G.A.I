$(document).ready(function() {
    var id, opcion;
    opcion = 4;
        
    tablaUsuarios = $('#tablaColor').DataTable({  
        "ajax":{            
            "url": "sql/color.php", 
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
    
    $('#formColor').submit(function(e){                         
        e.preventDefault(); 
        nombre = $.trim($('#nombre').val());  
        clasificacion = $.trim($('#clasificacion').val());  
         
            
          
            $.ajax({
              url: "sql/color.php",
              type: "POST",
              datatype:"json",    
              data:  {id:id, nombre:nombre,  clasificacion:clasificacion, opcion:opcion},    
              success: function(data) {
                tablaUsuarios.ajax.reload(null, false);
                var respuesta =  alert("Colores Actualizadas");
               }
            });			        
        $('#modalCRUD6').modal('hide');											     			
    });
    $("#btnNuevo").click(function(){
        opcion = 1;           
        id=null;
        $("#formColor").trigger("reset");
        $(".modal-header").css( "background-color", "#");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Alta de Usuario");
        $('#modalCRUD6').modal('show');   
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
        $('#modalCRUD6').modal('show');	
        var respuesta =  alert("Quieres Editar el Color");  	   
    });
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3;   
             
        var respuesta = confirm("¿Está seguro de borrar el Color "+id+"?");    
        if (respuesta) {            
            $.ajax({
              url: "sql/color.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},    
              success: function() {
                  tablaUsuarios.row(fila.parents('tr')).remove().draw();   
                  var respuesta =  alert("Se Elimino el Color  de Forma Correcta");         
               }
               
            });	
        }
     });
       
    });    