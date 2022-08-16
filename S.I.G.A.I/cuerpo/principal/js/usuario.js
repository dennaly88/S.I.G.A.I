$(document).ready(function() {
var id, opcion;
opcion = 4;
    
tablaUsuarios = $('#tablaUsuarios').DataTable({  
    "ajax":{            
        "url": "sql/usuarios.php", 
        "method": 'POST',         
        "data":{opcion:opcion},   
        "dataSrc":""
    }, 
    "columns":[
        {"data": "id"},
        {"data": "nombres"},
        {"data": "apellidos"},
        {"data": "telefono"},
        {"data": "correo"},
        {"data": "usuario"},
        {"data": "contraseña"},
        {"data": "perfil"},
        {"data": "gerencia"},
        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn-sm btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i> </button>&nbsp;&nbsp;<button class='btn-sm btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
    ]
});      
 
var fila; 

$('#formUsuarios').submit(function(e){                         
    e.preventDefault(); 
    nombres = $.trim($('#nombres').val());    
    apellidos = $.trim($('#apellidos').val());
    telefono = $.trim($('#telefono').val()); 
    correo = $.trim($('#correo').val()); 
    usuario = $.trim($('#usuario').val());    
    contraseña = $.trim($('#contraseña').val());
    perfil = $.trim($('#perfil').val()); 
    gerencia = $.trim($('#gerencia').val());   
  
      
        $.ajax({
          url: "sql/usuarios.php",
          type: "POST",
          datatype:"json",    
          data:  {id:id, nombres:nombres, apellidos:apellidos, telefono:telefono, correo:correo, usuario:usuario , contraseña:contraseña , perfil:perfil  , gerencia:gerencia,  opcion:opcion},    
          success: function(data) {
            tablaUsuarios.ajax.reload(null, false);
            var respuesta =  alert("Usuarios Actualizados de Forma Correcta");
           }
        });			        
    $('#modalCRUD').modal('hide');											     			
});
$("#btnNuevo").click(function(){
    opcion = 1;           
    id=null;
    $("#formUsuarios").trigger("reset");
    $(".modal-header").css( "background-color", "#");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Alta de Usuario");
    $('#modalCRUD').modal('show');   
});        
$(document).on("click", ".btnEditar", function(){		        
    opcion = 2;
    fila = $(this).closest("tr");	        
    id = parseInt(fila.find('td:eq(0)').text()); 		            
    nombres = fila.find('td:eq(1)').text();
    apellidos = fila.find('td:eq(2)').text();
    telefono = fila.find('td:eq(3)').text();
    correo = fila.find('td:eq(4)').text();
    usuario = fila.find('td:eq(5)').text();
    contraseña = fila.find('td:eq(6)').text();
    perfil = fila.find('td:eq(7)').text();
    gerencia = fila.find('td:eq(8)').text();
    $("#nombres").val(nombres);
    $("#apellidos").val(apellidos);
    $("#telefono").val(telefono);
    $("#correo").val(correo);
    $("#usuario").val(usuario);
    $("#contraseña").val(contraseña); 
    $("#perfil").val(perfil);
    $("#gerencia").val(gerencia);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Editar Usuario");		
    $('#modalCRUD').modal('show');	
    var respuesta =  alert("Quieres Editar el Usuario");  	   
});
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);           
    id = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
    opcion = 3;   
         
    var respuesta = confirm("¿Está seguro de borrar el usuario "+id+"?");    
    if (respuesta) {            
        $.ajax({
          url: "sql/usuarios.php",
          type: "POST",
          datatype:"json",    
          data:  {opcion:opcion, id:id},    
          success: function() {
              tablaUsuarios.row(fila.parents('tr')).remove().draw();   
              var respuesta =  alert("Se Elimino El Usuario  de Forma Correcta");         
           }
           
        });	
    }
 });
   
});    