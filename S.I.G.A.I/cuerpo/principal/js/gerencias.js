$(document).ready(function() {
    var id, opcion;
    opcion = 4;
        
    tablaUsuarios = $('#tablaGerencia').DataTable({  
        "ajax":{            
            "url": "sql/gerencias.php", 
            "method": 'POST',         
            "data":{opcion:opcion},   
            "dataSrc":""
        },
        "columns":[
            {"data": "id"},
            {"data": "nombre"},
            {"data": "ubicacion"},
            {"data": "siglas"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn-sm btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i> </button>&nbsp;&nbsp;<button class='btn-sm btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });     
     
    var fila; 
    
    $('#formGerencia').submit(function(e){                         
        e.preventDefault(); 
        nombre = $.trim($('#nombre').val());    
        ubicacion = $.trim($('#ubicacion').val());
        siglas = $.trim($('#siglas').val()); 
            
          
            $.ajax({
              url: "sql/gerencias.php",
              type: "POST",
              datatype:"json",    
              data:  {id:id, nombre:nombre,ubicacion:ubicacion, siglas:siglas,  opcion:opcion},    
              success: function(data) {
                tablaUsuarios.ajax.reload(null, false);
                var respuesta =  alert("Gerencias Actualizados de Forma Correcta");
               }
            });			        
        $('#modalCRUD3').modal('hide');											     			
    });
    $("#btnNuevo").click(function(){
        opcion = 1;           
        id=null;
        $("#formGerencia").trigger("reset");
        $(".modal-header").css( "background-color", "#");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Alta de Usuario");
        $('#modalCRUD3').modal('show');   
    });        
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;
        fila = $(this).closest("tr");	        
        id = parseInt(fila.find('td:eq(0)').text()); 		            
        nombre = fila.find('td:eq(1)').text();
        ubicacion = fila.find('td:eq(2)').text();
        siglas = fila.find('td:eq(3)').text();
        $("#nombre").val(nombre);
        $("#ubicacion").val(ubicacion);
        $("#siglas").val(siglas);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Usuario");		
        $('#modalCRUD3').modal('show');	
        var respuesta =  alert("Quieres Editar el Gerencias");  	   
    });
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3;   
             
        var respuesta = confirm("¿Está seguro de borrar la Gerencia "+id+"?");    
        if (respuesta) {            
            $.ajax({
              url: "sql/gerencias.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},    
              success: function() {
                  tablaUsuarios.row(fila.parents('tr')).remove().draw();   
                  var respuesta =  alert("Se Elimino la Gerencia  de Forma Correcta");         
               }
               
            });	
        }
     });
       
    });    