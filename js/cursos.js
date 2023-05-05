
function viewCurso(id,modo=0){
   switch(modo){
    case 0:{
        modo="Agregar Curso";
        break;
    }
    case 1:{
        modo="Añadir";
        break;
    }
    case 2:{
        modo="Eliminar";
        break;
    }
    case 3:{
        modo="Editar";
        break;
    }
    

   }
    $("#target-Modal").text("Se va a elminar al usuario " + id);
    var elemento = document.getElementById("id-curso");
    elemento.innerHTML=id + " " +modo;

   
}
