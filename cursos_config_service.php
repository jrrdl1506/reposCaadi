<?php
require("connection.php");
require("services/usuarios_service.php");
require("services/clubes_service.php");

    if(isset($_POST['altaAlumnoCurso'])) {
        echo "ALTA";
        if($_POST["id_alumno"]=="" ||
        $_POST["id_curso"]=="" 
        ){
            echo "DATOS INCOMPLETOS";
    
        }
        else{
            if(busca_usuario($_POST["id_alumno"])==TRUE){
                $alumno=$_POST["id_alumno"];
                $curso=$_POST["id_curso"];
                alta_alumno_curso($alumno,$curso);
            }
            else{
                echo "No se encontro el alumno";
            }
            header("Location: cursos_config.php?cursoId=".$_POST["id_curso"]);
            
        }
    }


    if(isset($_POST['modificarCurso'])) {
        echo "MODIFICA";
      
    }

    if (isset($_POST['idAlumno']) && isset($_POST['idCurso'])) {
        $idAl = $_POST['idAlumno'];
        $idCur = $_POST['idCurso'];

        delete_usuario_curso($idCur,$idAl);
    
    }

?>