$(document).ready(function() {
    var id, opcion;
    opcion = 4;
        
    tablaBienes = $('#tablaBienes').DataTable({  
        "ajax":{            
            "url": "sql/bienes.php", 
            "method": 'POST',         
            "data":{opcion:opcion},   
            "dataSrc":""
        },
        "columns":[
            {"data": "id"},
            {"data": "codigo"},
            {"data": "tipo"},
            {"data": "nombre_tipo"},
            {"data": "marca"},
            {"data": "modelo"},
            {"data": "color"},
            {"data": "condicion"},
            {"data": "seri"},
            {"data": "fecha_registro"},
            {"data": "fecha_compra"},
            {"data": "costo"},
            {"data": "ubicacion"},
            {"data": "financiamiento"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn-sm btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i> </button>&nbsp;&nbsp;<button class='btn-sm btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });     
    
    var fila; 
    
    $('#formBienes').submit(function(e){                         
        e.preventDefault(); 
        codigo = $.trim($('#codigo').val());    
        tipo = $.trim($('#tipo').val());
        nombre_tipo = $.trim($('#nombre_tipo').val()); 
        marca = $.trim($('#marca').val()); 
        modelo = $.trim($('#modelo').val());    
        color = $.trim($('#color').val());
        condicion = $.trim($('#condicion').val()); 
        seri = $.trim($('#seri').val()); 
        fecha_registro = $.trim($('#fecha_registro').val());
        fecha_compra = $.trim($('#fecha_compra').val());
        costo = $.trim($('#costo').val());
        ubicacion = $.trim($('#ubicacion').val());
        financiamiento= $.trim($('#financiamiento').val());       
         

            $.ajax({
              url: "sql/bienes.php",
              type: "POST",
              datatype:"json",    
              data:  {id:id, codigo:codigo, tipo:tipo, nombre_tipo:nombre_tipo, marca:marca, modelo:modelo, color:color, condicion:condicion, seri:seri, fecha_registro:fecha_registro, fecha_compra:fecha_compra, costo:costo, ubicacion:ubicacion, financiamiento:financiamiento, opcion:opcion},    
              success: function(data) {
                tablaBienes.ajax.reload(null, false);
                var respuesta =  alert("Bienes Nacionales Actualizados");
               }
            });			        
        $('#modalCRUD2').modal('hide');											     			
    });
            
    $("#btnNuevo").click(function(){
        opcion = 1;           
        id=null;
        $("#formBienes").trigger("reset");
        $(".modal-header").css( "background-color", "#");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Alta Usuario");
        $('#modalCRUD2').modal('show');	    
    });
            
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;
        fila = $(this).closest("tr");	        
        id = parseInt(fila.find('td:eq(0)').text()); 		            
        codigo = fila.find('td:eq(1)').text();
        tipo = fila.find('td:eq(2)').text();
        nombre_tipo = fila.find('td:eq(3)').text();
        marca = fila.find('td:eq(4)').text();
        modelo = fila.find('td:eq(5)').text();
        color = fila.find('td:eq(6)').text();
        condicion = fila.find('td:eq(7)').text();
        seri = fila.find('td:eq(8)').text();
        fecha_registro = fila.find('td:eq(9)').text();
        fecha_compra = fila.find('td:eq(10)').text();
        costo = fila.find('td:eq(11)').text();
        ubicacion = fila.find('td:eq(12)').text();
        financiamiento = fila.find('td:eq(13)').text();
        $("#codigo").val(codigo);
        $("#tipo").val(tipo);
        $("#nombre_tipo").val(nombre_tipo);
        $("#marca").val(marca);
        $("#modelo").val(modelo);
        $("#color").val(color);
        $("#condicion").val(condicion);
        $("#seri").val(seri);
        $("#fecha_registro").val(fecha_registro);
        $("#fecha_compra").val(fecha_compra);
        $("#costo").val(costo);
        $("#ubicacion").val(ubicacion);
        $("#financiamiento").val(financiamiento);
        $(".modal-header").css("background-color", "#007bff");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Usuario");		
        $('#modalCRUD2').modal('show');	
        var respuesta =  alert("Quieres Modificar el Bien Nacional");	   
    });
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3;        
        var respuesta = confirm("¿Está seguro de borrar el Bien "+id+"?");                
        if (respuesta) {            
            $.ajax({
              url: "sql/bienes.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, id:id},    
              success: function() {
                tablaBienes.row(fila.parents('tr')).remove().draw(); 
                var respuesta =  alert("Se Elimino El Bien Nacional  de Forma Correcta");                   
               }
            });	
        }
     });
         
    });    