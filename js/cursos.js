

function viewCurso(id,modo=0){
    window.location.href = "cursos_config.php?cursoId="+id;

   /*switch(modo){

    
    case 0:{
        modo="Agregar Curso";
        obtenerCurso(id);
        break;
    }
    case 1:{
        modo="Añadir";
        obtenerCurso(id);
        break;
    }
    case 2:{
        modo="Eliminar";
        obtenerCurso(id);
        break;
    }
    case 3:{
        modo="Editar";
        obtenerCurso(id);
        break;
    }
    

   }
   
    $("#target-Modal").text("Se va a elminar al usuario " + id);
    var elemento = document.getElementById("id-curso");
    elemento.innerHTML=id + " " +modo;
    */
   
}



function obtenerCurso(id){
    

    $.ajax({
        url: 'cursos.php?dato=' + id,  // Ruta al archivo PHP
        type: 'GET',  // Tipo de petición (GET)
        dataType: 'json',  // Tipo de datos esperados en la respuesta
      
        success: function(response) {
          // La petición fue exitosa, y la respuesta está en la variable 'response'
          console.log(response);
        },
      
        error: function(xhr, status, error) {
          // Ocurrió un error durante la petición
          console.log(xhr.responseText);
        }
      });
    
}
