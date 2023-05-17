
function borrarAlumno(id,curso){
   //alert(id + " " + curso);
   
    var idAlumno = id;
    var idCurso = curso; 
    var data = {
        idAlumno: idAlumno,
        idCurso: idCurso
    };
      
    $.ajax({
        url: 'cursos_config_service.php',  // Ruta al archivo PHP
        type: 'POST',  // Tipo de petición (POST)
        data: data,  // Datos a enviar
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
    
      location.reload();
}