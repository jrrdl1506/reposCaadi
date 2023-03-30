


function delUser(nombre){
    Swal.fire({
        title: '¿Estas seguro?',
        text: "El usuario " + nombre + " será eliminado del sistema",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar',
        cancelButtonText:'Cancelar',
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            
          )
        }
      })
     
}


function viewUser(){
    alert("Hola");
    $(location).prop('href', 'listaUsuarios.php');
}
